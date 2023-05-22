<?php

class Project{

    /**
     * @var int
     */
    private $id;

    private $nom;

    private $suivi;

    private $id_user;

    private $description;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }


    /**
     * @return mixed
     */
    public function getSuivi()
    {
        return $this->suivi;
    }

     /**
     * @param mixed $suivi
     */
    public function setSuivi($suivi): void
    {
        $this->suivi = $suivi;
    }


    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $id_user
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

}