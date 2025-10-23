<?php

namespace App\Classes;

use PDO;

class User
{
    public function getAll() {
        $conn = BD::getConnection();

        return $conn->query("SELECT * FROM users")->fetchAll(PDO::FETCH_OBJ);
    }
}