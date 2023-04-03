<?php

class Manager{
    private $base;

    public function __construct($base=null)
    {
        $this->setDb($base);
    }

    /**
     * @param mixed $base
     */
    public function setDb(PDO $base): void
    {
        $this->base = $base;
    }

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->base;
    }
}