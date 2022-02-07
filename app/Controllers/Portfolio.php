<?php
namespace App\Controllers;

use CodeIgniter\Controller;
helper('assets','form','helper');
class Portfolio extends BaseController{
    public function accueil(){
        echo view('templates/header');
        echo view('Portfolio/hello');
        echo view('templates/footer');
    }
}
