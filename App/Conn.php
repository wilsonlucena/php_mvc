<?php

namespace App;


class Conn
{
    public static function getDb()
    {
        $conn = new \PDO('mysql:host=localhost;dbname=mvc', 'root','261456');
        return $conn;
    }
}