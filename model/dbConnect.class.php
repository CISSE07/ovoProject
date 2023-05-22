<?php

class DbConnect extends PDO{
    private $dsn;

    private $username;

    private $pass;

    private $options;

    public function __construct()
    {
        $dsn="mysql:host=localhost;dbname=ovo;port=3306;charset=utf8";
        $username="root";
        $pass="";
        $options=[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        parent::__construct($dsn,$username,$pass,$options);
        //équivalent à new PDO
    }
}