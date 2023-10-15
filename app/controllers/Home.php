<?php

class Home extends Controller
{
    public function index()
    {
        $data["title"] = "Home";
        $data["url"] = "http://localhost";
        $data["name"] =  $this->model("User_model")->getUser();

        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/script");
        $this->view("templates/footer");
    }
}
