<?php

require_once "model/manager.php";
require_once "model/user/UserManager.php";
require_once "model/DbConnect.class.php";


class UserController extends AbstractController {

    private $base; //correspond à votre objet PDO

    private $UserManager; //correspond à la classe userManager 

    private $projectManager; // la classe projectManager qui gère toutes les donnée corrrespondant aux projets
    public function __construct(){
        $this->base = new DbConnect("root","root"); //instanciation d'un objet PDO
        $this->UserManager= new UserManager($this->base); //créer un objet statement
    }

    public function myProfil(){
        //Recherche toutes les infos de la personne connectée
        $mail=$_SESSION['user']['mail'];
        $data=$this->UserManager->getInfosUser($mail);
        $projects =$this->UserManager->getProjectUser($mail);
        $users = $this->UserManager->getUsers();
        require_once "view/user/profil.view.php";
    }
    

    public function loginValidation(){
        $data = $this->checkData(); 
        $connexion = $this->UserManager->verifyPassword($data["mail"], $data['mdp']);
        if ($connexion){
            if ($this->UserManager->accountValid($data['mail'])){
                $user = $this->UserManager->getInfosUser($data['mail']);
                DisplayController::messageAlert("Tu es connecté", DisplayController::VERTE);
                $_SESSION['user']=[
                    'mail' => $user['mail'],
                    'id'=>$user['id']
                ];
                header("Location: ".URL."account/profil");
                die();
            }else{
                DisplayController::messageAlert("Ton compte n'est pas activé", DisplayController::ORANGE);
                header("Location: ".URL."login");
                die();
            }
        }else{
            DisplayController::messageAlert("Pas connecté, ERREUR", DisplayController::ROUGE);
            header("Location: ".URL."login");
            die();
        }
    }
    
    public function logout(){
        DisplayController::messageAlert("Tu es déconnecté !", DisplayController::ROUGE);
        unset($_SESSION['user']);
        header("Location: ".URL. "accueil");
        die();
    }

    public function registerValidation(){
        $data= $this->checkData();
        $validation=$this->UserManager->addUser($data);
        if($validation){
            if ($this->UserManager->accountValid($data['mail'])){
                DisplayController::messageAlert("Tu es connecté", DisplayController::VERTE);
                $_SESSION['user']=[
                    'mail' => $data['mail'],
                ];
                header("Location: ".URL."account/profil");
                die();
            }else{
                DisplayController::messageAlert("Ton compte n'est pas activé", DisplayController::ORANGE);
                header("Location: ".URL."login");
                die();
            }
            
        }else{
            DisplayController::messageAlert("Erreur au moment de l'inscription", DisplayController::ROUGE);
            header("Location: " . URL . "accueil");
            die();
        }
    }
    

    // update infos de l'utilisateur
    public function UpdateUser(){
        $data= $this->checkData();
        $validationUpdate = $this->UserManager->updateUser($data);
        
        if($validationUpdate) {
            DisplayController::messageAlert("Tes information ont été mise à jour", DisplayController::VERTE);
            header("Location: ".URL."account/profil");
                die();
        } else {
            // Échec de la suppression
            DisplayController::messageAlert("Échec de la mise à jour.", DisplayController::ROUGE);
            header("Location: ".URL. "account/profil");
        }    
    }
   
    // supprimer infos de l'utilisateur
    public function deleteUser(){
        $user = $this->UserManager->getInfosUser($_SESSION['user']['mail']);
        if ($user) {
            // Suppression réussie, effectuez ici d'autres actions si nécessaire
            $mail = $user['mail'];
            $this->UserManager->deleteUser($mail);
            unset($_SESSION['user']);
            DisplayController::messageAlert("Votre compte a été supprimé avec succès.", DisplayController::VERTE);
            header("Location: ".URL. "accueil");
            die();
      } else {
            // Échec de la suppression
            DisplayController::messageAlert("Échec de la suppression du compte.", DisplayController::ROUGE);
            header("Location: ".URL. "account/profil");
        }
    }
}