<?php


abstract class Controller
{

    public $model;
    public $view;

    public function __construct()
    {
        $this->view = new View();
    }

    abstract function action_index();

    function action_del($id=null)
    {
        $table = $_SERVER['REQUEST_URI'];
        $table = explode('/', $table);
        $table = htmlspecialchars($table[1]);
        $id = htmlspecialchars($id);
        if (is_numeric($id)) {
            Data_Base::query("DELETE FROM `{$table}` WHERE `id` = {$id}");
            $this->action_index();
        }
        else{
            $this->action_index();
        }

    }

}