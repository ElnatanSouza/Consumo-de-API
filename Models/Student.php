<?php

require "Connection.php";

class Student
{
    public $id;
    public $name;
    public $telphone;

    public static function getAll()
    {
        // $conn = new Connection;
        // $connection = $conn->getDb();
        
        # Mesma coisa do que o de cima
        $connection = Connection::getDb();
        
        $stmt = $connection->query("SELECT * FROM students");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
