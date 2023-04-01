<?php

namespace App\Models;

use Core\libs\Model;

class NuevoModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(array $data): bool
    {
        try {
            $query = 'INSERT INTO productos (nombre, referencia, precio, peso, categoria, stock, fecha) 
            VALUES (:nombre, :referencia, :precio, :peso, :categoria, :stock, :fecha)';
            $stmt = $this->db->connect()->prepare($query);
            return $stmt->execute($data);
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
}