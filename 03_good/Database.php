<?php

namespace app;

use PDO;

class Database
{
    public \PDO $pdo;
    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'lemoncube1', 'asdfghjk');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getProducts($search = '')
    {
        $search = $_GET['search'] ?? '';
        if ($search) {
            $statement = $this->pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
            $statement->bindValue(':title', "%$search%");
        } else {
            $statement = $this->pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
        }

        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
