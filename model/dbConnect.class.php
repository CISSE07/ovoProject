<?php

class DbConnect extends PDO{
    private $dsn;

    private $username;

    private $pass;

    private $options;

    public function __construct($username,$pass)
    {
        $dsn="mysql:host=localhost;dbname=ovo;port=3306;charset=utf8";
        $this -> $username = $username;
        $this -> $pass = $pass;
        $options=[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
        parent::__construct($dsn,$username,$pass,$options);
        //équivalent à new PDO
    }
}