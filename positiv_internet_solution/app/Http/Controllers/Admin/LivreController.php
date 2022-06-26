<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Livre;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres = Livre::all();
        $categories = Categorie::all();
        return view('interface_admin/livre.liste', compact('livres', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('interface_admin/livre.ajout', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // dd($request->all());

        $validator= Validator::make($request->all(),[
            'livre_nom'=>'required|string',
            'auteur'=>'required|string',
            'ndp'=>'required|number',
            'prix_numerique'=>'',
            'prix_papier'=>'',
            'prix_promo'=>'',
            'categorie_id'=>'required|categorie',
            'date_sortie'=>'required|date_format:Y-m-d',
            'image_principale'=>'required|image',
            'fichier_livre'=>'required|fichier',
            'description'=>'',
            //'user_id'=>'required',
        ]);

        if(!$validator){
            return response()->json(['code'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $path= 'files/';
            $file_image= $request->file('image_principale');
            $file_fichier= $request->file('fichier_livre');
            $file_name_image= "images".time().'_'.$file_image->getClientOriginalName();
            $file_name_fichier= "images".time().'_'.$file_fichier->getClientOriginalName();

            //$upload = $file->storeAs($path, $file_name);
            $upload_image = $file_image->storeAs($path, $file_name_image, 'public');
            $upload_fichier = $file_fichier->storeAs($path, $file_name_fichier, 'public');

            if($upload_fichier && $upload_image){

                //STR_TO_DATE
                $livre = new Livre();
                $livre->livre_nom = $request->livre_nom;
                $livre->livre_auteur = $request->auteur;
                $livre->livre_description = $request->description;
                $livre->livre_nb_page = $request->nbp;
                $livre->livre_prix_version_num = $request->prix_numerique;
                $livre->livre_prix_version_pap = $request->prix_papier;
                $livre->livre_prix_promo = $request->prix_promo;
                $livre->categories_id = $request->categorie_id;
                $livre->livre_date_sortie = $request->date_sortie;
                $livre->livre_image = $file_name_image;
                $livre->livre_fichier = $file_name_fichier;
                $livre->user_id= Auth::guard('admin')->user()->id;

                $query = $livre->save();
                if(!$query){
                    return response()->json(['code'=>0, "msg"=>"erreur d ajout"]);
                }else{
                    return response()->json(['code'=>1, "msg"=>"livre ajouté avec succès"]);
                }
            }
        }



    }

    public function getLivreById($id)
    {
        $livre= Livre::find($id);
        return response()->json($livre);
    }

    public function status_update(Request $request)
    {
        //get product status with the help of product ID
        $livre = DB::table('livres')
                    ->select('livre_status')
                    ->where('id','=',$request->id)
                    ->first();

        //Check user status
        if($livre->livre_status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }

        //update product status
        $values = array('livre_status' => $status );
        DB::table('livres')->where('id',$request->id)->update($values);
        return response()->json(['code'=>1, 'msg'=>"livre mis à jour"]);
    }

    public function livreUpdate(Request $request)
    {

        $livre= Livre::find($request->id);
        $livre->user_id = Auth::guard('admin')->user()->id;

        $path='files/';

        $validator= Validator::make($request->all(),[
            'name'=>'required|string|unique:livres,livre_nom,'.$livre->id,
            'auteur'=>'required|string',
            'nombre_page'=>'required|number',
            'prix_numerique'=>'required|float',
            'prix_papier'=>'required|float',
            'prix_promo'=>'required|float',
            'date_sortie'=>'required|date_format:Y-m-d',
            'image'=>'required|image',
            'fichier'=>'required|fichier',
            'description'=>'required|text',
            //'user_id'=>'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            if($request->hasFile('image') || $request->hasFile('fichier')){
                $image_path = $path.$livre->livre_image;
                $fichier_path = $path.$livre->livre_fichier;

                if($livre->livre_image != null && \Storage::disk('public')->exists($image_path)){
                    \Storage::allDirectories('public');disk('public')->delete($image_path);
                }

                if($livre->livre_fichier != null && \Storage::disk('public')->exists($fichier_path)){
                    \Storage::disk('public')->delete($fichier_path);
                }

                $file_image= $request->file('image');
                $file_fichier= $request->file('fichier');
                $file_name_image= time().'_'.$file_image->getClientOriginalName();
                $file_name_fichier= time().'_'.$file_fichier->getClientOriginalName();

                $upload_image = $file_image->storeAs($path, $file_name_image, 'public');
                $upload_fichier = $file_fichier->storeAs($path, $file_name_fichier, 'public');

                if($upload_fichier && $upload_image){
                    //STR_TO_DATE
                    $livre->update([
                        'livre_nom'=>$request->nom,
                        'livre_auteur'=> $request->auteur,
                        'livre_description' => $request->description,
                        'livre_nb_page' => $request->nombre_page,
                        'livre_prix_version_num' => $request->prix_numerique,
                        'livre_prix_version_pap' => $request->prix_papier,
                        'livre_prix_promo' => $request->prix_promo,
                        'livre_date_sortie' => $request->date_sortie,
                        'livre_image'=> $request->image,
                        'livre_fichier'=> $request->fichier,
                        // 'user_id' = Auth::guard('admin')->user()->id,
                    ]);
                    }
                    return response()->json(['code'=>1, 'msg'=>"livre mise à jour avec succès"]);
                }

            }
            // else{
            //     $livre->update([
            //         'livre_nom'=>$request->nom,
            //     ]);
            //     return response()->json(['code'=>1, 'msg'=>"livre mise à jour avec succès"]);
            // }

        // $livre->livre_nom = $request->livre_nom;
        // $livre->livre_auteur = $request->auteur;
        // $livre->livre_description = $request->description;
        // $livre->livre_nb_page = $request->nbp;
        // $livre->livre_prix_version_num = $request->prix_numerique;
        // $livre->livre_prix_version_pap = $request->prix_papier;
        // $livre->livre_prix_promo = $request->prix_promo;
        // $livre->livre_date_sortie = $request->date_sortie;
        // $livre->livre_image = $file_name_image;
        // $livre->livre_fichier = $file_name_fichier;
        // $livre->livre_name = $request->name;


        // $livre->save();
        // return response()->json(['code'=>1, 'msg'=>"categorie mis à jour"]);

    }

    public function livreDelete(Request $request)
    {
        $livre= Livre::find($request->id);
        $query = $livre->delete();

        if($query){
            return response()->json(['code'=>1, 'msg'=>"livre supprimé"]);
        }else{
            return response()->json(['code'=>0, 'msg'=>"erreur de suppression"]);
        }

    }


}
