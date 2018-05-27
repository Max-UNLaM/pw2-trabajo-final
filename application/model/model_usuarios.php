<?php

class Model_Usuarios extends Model{
    public function getList(){
        $userList[] = array("id" => 1, "nombre" => "Juan Perez");
        $userList[] = array("id" => 2, "nombre" => "Ramon Perez");
        $userList[] = array("id" => 3, "nombre" => "Carlos Fernandez");
        return $userList;
    }
}