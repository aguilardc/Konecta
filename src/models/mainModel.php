<?php

namespace App\Models;

use Core\libs\Model;
use App\Models\ProductModel as Product;

class MainModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get(): bool|array
    {
        $products = [];

        try {
            return $this->db->connect()
                ->query('SELECT * FROM  productos')
                ->fetchAll(\PDO::FETCH_CLASS, Product::class);
        } catch (\PDOException $e) {
            return [];
        }

    }

    public function getById($id)
    {
        $stmt = $this->db->connect()->prepare('SELECT * FROM productos WHERE id = :id');
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Product::class);
        try {
            $stmt->execute(['id' => $id]);
            return $stmt->fetch();

        } catch (\PDOException $e) {
            return null;
        }
    }

    public function update(array $data): bool
    {
        try {
            $stmt = $this->db->connect()->prepare('UPDATE productos 
            SET nombre = :nombre, referencia= :referencia, precio= :precio, peso = :peso, categoria = :categoria, stock = :stock
            WHERE id = :id');

            return $stmt->execute($data);
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $stmt = $this->db->connect()->prepare('DELETE FROM productos where id = :id');
            return $stmt->execute([
                'id' => $id
            ]);
        } catch (\PDOException $e) {
            return false;
        }
    }
}
