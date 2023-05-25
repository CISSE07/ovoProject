<?php

class User {
    private $id;

    private $nom;

    private $prenom;

    private $mail;

    private $pass;

    private $role;

    private $is_valid;

    private $id_project;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nom
    */
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom): void
    {
        $this->nom = $nom;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }

     /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getMail()
    {
        return $this->mail;
    }

     /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    public function getPass()
    {
        return $this->pass;
    }

     /**
     * @param mixed $pass
     */
    public function setPass($pass): void
    {
        $this->pass = $pass;
    }


    public function getRole()
    {
        return $this->role;
    }

     /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }


    public function getValid()
    {
        return $this->is_valid;
    }

     /**
     * @param mixed $is_valid
     */
    public function setValid($is_valid): void
    {
        $this->is_valid = $is_valid;
    }


    public function getIdProject()
    {
        return $this->id_project;
    }

     /**
     * @param mixed $id_project
     */
    public function setIdProject($id_project): void
    {
        $this->id_project = $id_project;
    }

}