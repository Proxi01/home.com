<?php

class Model
{
    public static $row = [];

//    Getting data from the table in argument
    public function get_data($table)
    {

        $res = Data_Base::query("SELECT * FROM {$table} ORDER BY `id` DESC LIMIT 12");

        while ($data = mysqli_fetch_array($res)) {
            self::$row;
            array_push(self::$row, $data);
        }
        return self::$row;
    }

}