<?php 

class Connection 
{
    private static $conn;
    
    public static function getConnection()
    {
        self::$conn = new PDO("mysql:host=localhost;dbname=estoque","root","");
        return self::$conn;
    }

    public static function closeConnection()
    {
        if(self::$conn)
        {
            self::$conn = null;
        }
    }
}