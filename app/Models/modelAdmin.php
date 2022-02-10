<?php
namespace App\Models;
use CodeIgniter\Model;
class modelAdmin extends Model{
    protected $table = 'administrateur';
    protected $allowedFields = ['id','nom','idConnexion','mdp','statut'];
    protected $primaryKey = 'id';
    public function return_admin(){
        return $this->findAll();
    }
}