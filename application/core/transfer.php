<?php
require '../database/db.php';

//Get data from form
if ($_POST['param']){
    $param = json_decode($_POST['param']);
    $table = htmlspecialchars($param->uri);
    $month = htmlspecialchars($param->month);
    $prev = htmlspecialchars($param->prev);
    $curr = htmlspecialchars($param->curr);
    $sum = htmlspecialchars($param->sum);

//Query to DB
    $query = Data_Base::query("INSERT INTO `{$table}`(`month`,`previous_record`,`current_record`,`sum`) VALUES ('{$month}',{$prev},{$curr},{$sum})");

    exit();

}