<?php

class Controller_Gas extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_Gas();
    }

    function action_index()
    {
        $data = $this->model->get_data('gas');
        $this->view->generate('gas_view.php', 'template_view.php', $data);
    }
}