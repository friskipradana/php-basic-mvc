<?php

class About extends Controller
{
    public function index($nama = "[__name]", $live = "[__live]", $working = "[__working]")
    {
        $data["title"] = "About";
        $data["name"] =  $nama;
        $data["live"] =  $live;
        $data["working"] =  $working;

        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/script");
        $this->view("templates/footer");
    }
    public function page()
    {
        $data["title"] = "Page";

        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/script");
        $this->view("templates/footer");
    }
}
