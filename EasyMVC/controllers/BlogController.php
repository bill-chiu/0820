<?php

class BlogController extends Controller
{

    function index()
    {
        echo "home page of HomeController";
    }


    function list($name)
    {
        $user = $this->model("User");
        $user->name = $name;
        $this->view("Blog/blog", $user);
        //echo "Hello! $user->name"; 
    }
}
