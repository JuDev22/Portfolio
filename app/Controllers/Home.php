<?php

namespace App\Controllers;
use App\Models\modelProjet;
helper('assets','form','helper');
class Home extends BaseController
{
    public function index()
    {
        $ModelProjet = new modelProjet();
        $data['projets'] = $ModelProjet->return_produits();
        // dd($data);
        $data['titreDeLaPage'] = 'Porfolio';
        return view('front/accueil', $data);
    }
}
