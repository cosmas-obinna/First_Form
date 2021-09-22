<?php
/* Creating DataBase Connection */
    $host = '127.0.0.1';
    $db = 'attendance_db';
    $user = 'root';
    $pass = 'Nchkonjm.123';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        echo "<h5 class = text-danger>We are Live</h5>";
    } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
    }
?>