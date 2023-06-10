<?php

class Home  extends Controller
{

    public function index()
    {

        $data["judul"] = "Home";
        $this->view("templates/Header", $data);
        $this->view("home/Index");
        $this->view("templates/Footer");
    }
}