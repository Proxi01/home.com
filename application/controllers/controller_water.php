<?php

class Controller_Water extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_Water();
    }

    function action_index()
    {
        $data = $this->model->get_data('water');
        $this->view->generate('water_view.php', 'template_view.php', $data);
    }
}