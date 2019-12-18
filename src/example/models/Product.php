<?php

declare(strict_types=1);

namespace Example\Models;

use \PDO;

class Product
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt =  $this->pdo->query('SELECT * FROM product');
        return $stmt->fetchAll();
    }
}
