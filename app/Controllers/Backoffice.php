<?php

namespace App\Controllers;
use App\Models\modelAdmin;
helper('assets','form','helper');
class Backoffice extends BaseController
{
    public function backoffice()
    {
        $ModelAdmin = new modelAdmin();
        $data['admin'] = $ModelAdmin->return_admin();
        $data['titreDeLaPage'] = 'Bienvenue';
        return view('back/accueil', $data);
    }
}
