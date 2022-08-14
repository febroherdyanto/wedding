<?php 

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class DoaModel extends Model{
    protected $table = 'doa';
    protected $primaryKey = 'idDoa';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['idDoa', 'waktu', 'pengirimDoa', 'ucapanDoa', 'ipaddress'];
    protected $db;
    

    function add($data){
        return $this->db
        ->table($this->table)
        ->insert($data);
    }

}