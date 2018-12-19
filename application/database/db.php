<?php

class Data_Base
{
    private static $server_name = '127.0.0.1';
    private static $username = 'root';
    private static $password = '';
    private static $db = 'utility';

    //Connection DB
    static function connection()
    {
        $conn = new mysqli(Data_Base::$server_name, Data_Base::$username, Data_Base::$password, Data_Base::$db);
        if (!$conn) {
            die("Connection filed: " . mysqli_connect_error());
        }
        else return $conn;
    }

    //Query method
    static function query($q)
    {
        self::connection();
        $res = mysqli_query(self::connection(), $q);
        return $res;
        /*$res = self::connection()->query($q);
        return $res;*/
    }

}