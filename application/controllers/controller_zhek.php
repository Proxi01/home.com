<?php

class Controller_Zhek extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->model = new Model_Zhek();
    }

    function action_index()
    {
        $data = $this->model->get_data('zhek');
        $this->view->generate('zhek_view.php','template_view.php',$data);
    }
}