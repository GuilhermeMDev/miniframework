<?php

namespace App;

use PDO;
use PDOException;

class Connection
{

    public static function getDB()
    {
        try {

            $conn = new PDO(
                "mysql:host=localhost;dbname=miniframework",
                "root",
                "root"
            );

            return $conn;

        } catch (PDOException $e) {
            //Tratar de alguma forma
        }
    }
}