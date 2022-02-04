<?php
namespace App\Controllers;

use CodeIgniter\Controller;
helper('assets');
class Portfolio extends BaseController{
    public function accueil(){
        echo view('templates/header');
        echo view('Portfolio/bonjour');
        echo view('templates/footer');

    }
}
