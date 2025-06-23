<?php
class Database
{
    public static function connect()
    {
        $host = 'localhost';
        $dbname = 'qlbanhang';
        $user = 'root';
        $pass = '';
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
        }
    }
}
