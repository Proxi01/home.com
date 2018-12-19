<?php

class Controller_Warm extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_Warm();
    }

    function action_index()
    {
        $data = $this->model->get_data('warm');
        $this->view->generate('warm_view.php', 'template_view.php', $data);
    }
}