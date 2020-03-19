<?php


class Dbh {

    private $host = "localhost";
    private $user = "root";
    private $pw = "";
    private $dbName = "todo";


    protected function connect() {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
    $pdo = new PDO($dsn, $this->user, $this->pw);
    // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_BOTH);
    return $pdo;
    }
}