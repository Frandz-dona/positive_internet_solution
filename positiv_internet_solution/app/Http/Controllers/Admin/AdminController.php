<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Client;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:admins,email',
            'password'=>'required|min:5|max:30',
            'telephone'=>'required|',
            'role'=>'required|min:3|max:30',
            'password_confirmation'=>'required|min:5|max:30|same:password',
        ]);

        $admin = new Admin();
        $admin->admin_name  =$request->name;
        $admin->admin_prenom  =$request->lastname;
        $admin->admin_telephone  =$request->telephone;
        $admin->admin_role  =$request->role;
        $admin->email =$request->email;
        $admin->password = Hash::make($request->password);
        $save= $admin->save();

        if($save){
            return redirect()->back()->with('success', 'vous etes enregistrer');
        }else{
            return redirect()->back()->with('fail', "echec d'enregistrement");
        }
    }

    public function check(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30',
        ],
        [
            'email.exists'=>"l'adresse n existe pas dans la base"
        ]);

        //les conditons d authentification
        $creds = $request->only('email','password');
        $creds = Arr::add($creds, 'admin_status', '1');

        if(Auth::guard('admin')->attempt($creds)){
            return redirect()->route('admin.home')->with('success', 'login');
        }else{
            return redirect()->route('admin.login')->with('fail', 'error de login: veillez contacter l admin');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/admin_connexion_login');
    }

    public function admin_liste()
    {
        $admins = Admin::all();
        // dd($admins);
        return view('interface_admin.utilisateur.liste', compact('admins'));

    }

     public function utilisateur_liste()
    {
        $utilisateurs = Client::all();
        // dd($admins);
        return view('interface_admin.users.liste', compact('utilisateurs'));

    }


    public function getAdminById($id)
    {
        $admin= Admin::find($id);
        return response()->json($admin);
    }


    public function status_update(Request $request)
    {
        //get product status with the help of product ID
        $admin = DB::table('admins')
                    ->select('admin_status')
                    ->where('id','=',$request->id)
                    ->first();

        //Check user status
        if($admin->admin_status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }

        //update product status
        $values = array('admin_status' => $status );
        DB::table('admins')->where('id',$request->id)->update($values);

        return response()->json(['code'=>1, 'msg'=>"administrateur mis à jour"]);
    }

}
