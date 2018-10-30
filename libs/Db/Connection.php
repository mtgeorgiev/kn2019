<?php

// namespace libs\Db;

class Connection
{
    private static $conn;
    
    public function get()
    {
        if (!self::$conn)
        {
            self::$conn = new PDO('mysql:host=localhost;dbname=web', 'root', '');
        }

        return self::$conn;
    }
}
