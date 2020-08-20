<?php

class BlogController extends Controller {
    
    function index() {
        echo "home page of HomeController";
    }
    
    function list($name) {
        echo $name;
    }
    
    
}

?>