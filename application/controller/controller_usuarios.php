<?php

class Controller_Usuarios extends Controller{

    function ver(){
        $data = $this->model->getList();
        $this->view->generate('usuarios_view.php', 'template_view.php', $data);
    }

}