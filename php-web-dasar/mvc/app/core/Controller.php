<?php 

class Controller{
    public function view($view = null, $data = null)
    {
    require_once "../app/views/" . $view . ".php";
    }
}