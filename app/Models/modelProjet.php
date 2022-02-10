<?php
namespace App\Models;
use CodeIgniter\Model;
class modelProjet extends Model{
    protected $table = 'projets';
    protected $allowedFields = ['id','titre','image','contenu'];
    protected $primaryKey = 'id';
    public function return_produits(){
        return $this->findAll();
    }
}