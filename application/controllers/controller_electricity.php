<?php

class Controller_Electricity extends Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->model = new Model_Electricity();


    }

    function action_index()
    {

        $data = $this->model->get_data('electricity');
        $this->view->generate('electricity_view.php', 'template_view.php', $data);
    }



}