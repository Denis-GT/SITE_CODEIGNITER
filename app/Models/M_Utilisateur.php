<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Utilisateur extends Model {
    protected $table = 'Utilisateurs' ;
    protected $primaryKey = 'idUtilisateur'; 
    protected $useAutoIncrement = true ; 
    
    protected $returnType = 'object' ; 
    protected $useSoftDeletes = false ; 

    protected $allowedFields = ['nom','prenom','email','password','typeClient'];

    protected $useTimestamps = false ; 
    // protected $createdFiled = 'created_at'; 
    // protected $updatedFiled = 'updated_at'; 
    // protected $deletedFiled = 'deleted_at'; 

    // protected $validationRules = [];
    // protected $validationMessages = [];
    protected $skipValidation = false;


    public function Get_Personne($P_idUtilisateur){
        $result = $this->db->query('SELECT * FROM Utilisateurs WHERE idUtilisateur = '.$P_idUtilisateur);
        return $result->getResultArray();
    }
}