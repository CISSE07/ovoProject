<?php

class VisitorController {
    public function home(){
        require_once "view/visitor/home.view.php";
    }
    public function login(){
        require_once "view/visitor/login.view.php";
    }
    public function portfolio(){
        require_once "view/visitor/portfolio.view.php";
    }
    public function expertise(){
        require_once "view/visitor/expertise.view.php";
    }
    public function contact(){
        require_once "view/visitor/contact.view.php";
    }
    public function register(){
        require_once "view/visitor/register.view.php";
    }
    
}