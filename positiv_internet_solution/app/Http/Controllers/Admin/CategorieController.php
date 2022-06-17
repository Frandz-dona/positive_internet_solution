<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Categorie::all();

        return view('interface_admin.categorie.liste', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('interface_admin.categorie.ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'categorie_name'=>'required|string',
            //'user_id'=>'required',
        ]);

        if(!$validator){
            return response()->json(['code'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $categorie = new Categorie();
            $categorie->categorie_name = $request->name;
            $categorie->user_id= Auth::guard('admin')->user()->id;

            $query = $categorie->save();
            if(!$query){
                return response()->json(['code'=>0, "msg"=>"erreur d ajout"]);
            }else{
                return response()->json(['code'=>1, "msg"=>"categorie ajouté avec succès"]);
            }
        }
    }
    

    public function status_update(Request $request)
    {
        //get product status with the help of product ID
        $categorie = DB::table('categories')
                    ->select('categorie_status')
                    ->where('id','=',$request->id)
                    ->first();

        //Check user status
        if($categorie->categorie_status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }

        //update product status
        $values = array('categorie_status' => $status );
        DB::table('categories')->where('id',$request->id)->update($values);
        return response()->json(['code'=>1, 'msg'=>"categorie mis à jour"]);
    }

    public function getCategorieById($id)
    {
        $categorie= Categorie::find($id);
        return response()->json($categorie);
    }

    public function categorieUpdate(Request $request)
    {
        $categorie= Categorie::find($request->id);
        $categorie->user_id = Auth::guard('admin')->user()->id;
        $categorie->categorie_name = $request->name;

        $categorie->save();
        return response()->json(['code'=>1, 'msg'=>"categorie mis à jour"]);

    }

    public function categorieDelete(Request $request)
    {
        $categorie= Categorie::find($request->id);
        $query = $categorie->delete();

        if($query){
            return response()->json(['code'=>1, 'msg'=>"categorie supprimé"]);
        }else{
            return response()->json(['code'=>0, 'msg'=>"erreur de suppression"]);
        }

    }

}
