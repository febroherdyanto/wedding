<?php 

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class KehadiranModel extends Model{
    protected $table = 'kehadiran';
    protected $primaryKey = 'idKehadiran';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['idKehadiran', 'idGuest', 'statusKehadiran', 'pesan'];
    protected $db;
    

    function add($data){
        return $this->db
        ->table($this->table)
        ->insert($data);
    }

}