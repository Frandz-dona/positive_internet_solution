<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Formation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::all();
        return view('interface_admin/formation.liste', compact("formations"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('interface_admin/formation.ajout');
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
            'titre_fromation'=>'required|string',
            'auteur_formation'=>'required|string',
            'prix_formation'=>'',
            'date_debut_formation'=>'required|date_format:Y-m-d',
            'date_fin_formation'=>'required|date_format:Y-m-d',
            'photo_couverture_formation'=>'required|image',
            'description_formation'=>'',
            'contenu_details_formation'=>'required|text',
            'reference_formation'=>'required|text',
            //'user_id'=>'required',
        ]);

        if(!$validator){
            return response()->json(['code'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $path= 'fichier/';
            $file_image= $request->file('photo_couverture_formation');
            $file_name_image= "images".time().'_'.$file_image->getClientOriginalName();

            //$upload = $file->storeAs($path, $file_name);
            $upload_image = $file_image->storeAs($path, $file_name_image, 'public');

            if($upload_image){

                //STR_TO_DATE
                $formation = new Formation();
                $formation->titre_fromation = $request->titre_fromation;
                $formation->description_formation = $request->description_formation;
                $formation->auteur_formation = $request->auteur_formation;
                $formation->date_debut_formation = $request->date_debut_formation;
                $formation->date_fin_formation = $request->date_fin_formation;
                $formation->contenu_details_formation = $request->contenu_details_formation;
                $formation->prix_formation = $request->prix_formation;
                $formation->reference_formation = $request->reference_formation;
                $formation->photo_couverture_formation = $file_name_image;
                $formation->user_id= Auth::guard('admin')->user()->id;

                $query = $formation->save();
                if(!$query){
                    return response()->json(['code'=>0, "msg"=>"erreur d ajout"]);
                }else{
                    return response()->json(['code'=>1, "msg"=>"formatin ajouté avec succès"]);
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getFormationById($id)
    {
        $formation= Formation::find($id);
        return response()->json($formation);
    }

     public function status_update(Request $request)
    {
        //get product status with the help of product ID
        $formation = DB::table('formations')
                    ->select('status_formation')
                    ->where('id','=',$request->id)
                    ->first();

        //Check user status
        if($formation->status_formation == '1'){
            $status = '0';
        }else{
            $status = '1';
        }

        //update product status
        $values = array('status_formation' => $status );
        DB::table('formations')->where('id',$request->id)->update($values);
        return response()->json(['code'=>1, 'msg'=>"formation mis à jour"]);
    }

        public function formationUpdate(Request $request)
    {

        $formation= Formation::find($request->id);
        $formation->user_id = Auth::guard('admin')->user()->id;

        $path='files/';

        $validator= Validator::make($request->all(),[
            'titre_fromation'=>'required|string|unique:formations,titre_formation,'.$formation->id,
            'auteur_formation'=>'required|string',
            'contenu_details_formation'=>'required|string',
            'prix_formation'=>'required|float',
            'date_debut_formation'=>'required|date_format:Y-m-d',
            'date_fin_formation'=>'required|date_format:Y-m-d',
            'photo_couverture_formation'=>'required|image',
            'description_formation'=>'required|text',
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            if($request->hasFile('image')){
                $image_path = $path.$livre->livre_image;
                if($livre->livre_image != null && \Storage::disk('public')->exists($image_path)){
                    \Storage::allDirectories('public');disk('public')->delete($image_path);
                }

                if($livre->livre_fichier != null && \Storage::disk('public')->exists($fichier_path)){
                    \Storage::disk('public')->delete($fichier_path);
                }

                $file_image= $request->file('image');
                $file_name_image= time().'_'.$file_image->getClientOriginalName();

                $upload_image = $file_image->storeAs($path, $file_name_image, 'public');
                $upload_fichier = $file_fichier->storeAs($path, $file_name_fichier, 'public');

                if($upload_image){
                    //STR_TO_DATE
                    $formation->update([
                        'titre_fromation'=>$request->nom,
                        'auteur_formation'=> $request->auteur,
                        'contenu_details_formation' => $request->description,
                        'description_formation' => $request->description,
                        'prix_formation' => $request->prix_numerique,
                        'date_debut_formation' => $request->date_debut_formation,
                        'date_sortie_formation' => $request->date_sortie_formation,
                        'photo_couverture_formation'=> $request->image,
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

     public function formationDelete(Request $request)
    {
        $formation= Formation::find($request->id);
        $query = $formation->delete();

        if($query){
            return response()->json(['code'=>1, 'msg'=>"formation supprimé"]);
        }else{
            return response()->json(['code'=>0, 'msg'=>"erreur de suppression"]);
        }

    }

}
