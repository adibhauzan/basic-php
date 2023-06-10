<?php
class About extends Controller
{
    public function index(?String $nama = null, ?String $pekerjaan = null){

        $data = [
            "nama" => "adib",
            "pekerjaan" => "programmmer"
        ];
        $data["judul"] = "About";
        $this->view("about/Index", $data);
        $this->view("templates/Header", $data);
        $this->view("templates/Footer");
        
    }
    
    public function page()
    {
        echo "About/page";
    }
}