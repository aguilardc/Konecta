<?php

namespace Core\libs;

class Database
{
    private string $host;
    private string $db;
    private string $user;
    private string $password;
    private string $charset;

    public function __construct()
    {
        $this->host = constant('DB_HOST');
        $this->db = constant('DB_NAME');
        $this->user = constant('DB_USER');
        $this->password = constant('DB_PASSWORD');
        $this->charset = constant('DB_CHARSET');
    }

    public function connect()
    {
        try {
            $connection = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
            $options = [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_EMULATE_PREPARES => false,
            ];
            return new \PDO($connection, $this->user, $this->password, $options);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}