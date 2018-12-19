<?php
require '../database/db.php';

//Get data from form
if ($_POST['param']){
    $param = json_decode($_POST['param']);
    $table = htmlspecialchars($param->uri);
    $prev = htmlspecialchars($param->prev);
    $curr = htmlspecialchars($param->curr);
    $sum = htmlspecialchars($param->sum);

//Query to DB
    $query = Data_Base::query("INSERT INTO `{$table}`(`previous_record`,`current_record`,`sum`) VALUES ({$prev},{$curr},{$sum})");

    exit();

}