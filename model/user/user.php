<?php

class Utilisateur {
    private $id;
    private $nom;
    private $email;
    private $prenom;

    public function __construct($id, $nom, $email, $prenom) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->prenom = $prenom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    // ... les autres méthodes de définition de propriétés ...

    // les méthodes de récupération de propriétés (getters)
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPrenom() {
        return $this->prenom;
    }
}
