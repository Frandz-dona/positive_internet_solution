<?php

namespace App\Http\Controllers\Client;

use App\Models\Livre;
use App\Models\Formation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function livre()
    {
        $livres = Livre::where('livre_status', 1)
                ->get();
        return view("interface_client.livre", compact('livres'));
    }

    public function affiliation()
    {
        return view('interface_client.affiliation');
    }

    public function formation()
    {
        $formations = Formation::where('status_formation', 1)
                        ->get();
        return view('interface_client.formation', compact('formations'));
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

    public function livre_detail($id)
    {
        $livre = Livre::find($id);
        return view('interface_client.livre_details', compact('livre'));
    }

    public function formation_detail($id)
    {
        $formation = Formation::find($id);
        return view('interface_client.formation_details', compact('formation'));
    }

    
}
