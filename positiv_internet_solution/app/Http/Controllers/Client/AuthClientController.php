<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;


class AuthClientController extends Controller
{
    //

     public function create(Request $request)
    {
        
        $request->validate([
            'nom'=>'required|string',
            'email'=>'required|email|unique:clients,email',
            'password'=>'required|min:5|max:30',
            'phone'=>'required',
            'country'=>'required',
            'code_affiliation'=>'',
        ]);


        $client = new Client();
        $client->client_nom  =$request->nom;
        $client->client_telephone  =$request->phone;
        $client->email =$request->email;
        $client->password = Hash::make($request->password);
        $client->code_affiliation = $request->code_affiliation;
        $client->pays = $request->country;
        $save= $client->save();

        if($save){
            return redirect()->back()->with('success', 'vous etes enregistrer! veillez confirmee votre Email');
        }else{
            return redirect()->back()->with('fail', "echec d'enregistrement");
        }
    }


    public function check(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:clients,email',
            'password'=>'required|min:5|max:30',
        ],
        [
            'email.exists'=>"l'adresse n existe pas dans la base"
        ]);

        //les conditons d authentification
        $creds = $request->only('email','password');
        $creds = Arr::add($creds, 'client_status', '1');

        if(Auth::guard('client')->attempt($creds)){
            return redirect()->route('client.dashboard')->with('success', 'login');
        }else{
            return redirect()->route('client.client_login')->with('fail', 'error de login: veillez confimer votre email');
        }
    }

     public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/admin_connexion_login');
    }
}
