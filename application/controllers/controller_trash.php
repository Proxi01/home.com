<?php

class Controller_Trash extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_Trash();
    }

    function action_index()
    {
        $data = $this->model->get_data('trash');
        $this->view->generate('trash_view.php', 'template_view.php', $data);
    }
}