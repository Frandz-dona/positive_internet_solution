<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('interface_client/accueil');
    }

    public function service()
    {
        return view('interface_client.service');
    }

    public function achat_vente()
    {
        return view("interface_client.achat_vente_crypto");
    }

    public function crypto_fortune()
    {
        return view("interface_client.cryoto_fortune");
    }

    public function affiliation()
    {
        return view('interface_client.affiliation');
    }

    public function formation()
    {
        return view('interface_client.formation');
    }

    public function a_propos()
    {
        return view('interface_client.a_propos');
    }

    public function contact()
    {
        return view('interface_client.contact');
    }

    public function positive_academy()
    {
        return view('interface_client.positive_academy');
    }

    public function mention_legale()
    {
        return view('interface_client.mention_legale');
    }

    public function condition_de_vente()
    {
        return view('interface_client.condition_de_vente');
    }

    public function crypto_actu()
    {
        return view('interface_client.crypto_actu');
    }
}
