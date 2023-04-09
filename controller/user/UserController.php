<?php

require_once "model/manager.php";
require_once "model/user/UserManager.php";
require_once "model/DbConnect.class.php";

class UserController extends AbstractController {

    private $base; //correspond à votre objet PDO

    private $UserManager; //correspond à la classe userManager 
    public function __construct(){
        $this->base = new DbConnect(); //instanciation d'un objet PDO
        $this->UserManager= new UserManager($this->base); //créer un objet statement
    }

    public function myProfil(){
        //Recherche toutes les infos de la personne connectée
        $mail=$_SESSION['user']['mail'];
        $data=$this->UserManager->getInfosUser($mail);
        require_once "view/user/profil.view.php";
    }
    

    public function loginValidation(){
        $data = $this->checkData();
        // var_dump($this->UserManager->getPasswordUser($data["mail"]));
        // die();
        
        $connexion = $this->UserManager->verifyPassword($data["mail"], $data['mdp']);
        if ($connexion){
            if ($this->UserManager->accountValid($data['mail'])){
                $user = $this->UserManager->getInfosUser($data['mail']);
                DisplayController::messageAlert("Tu es connecté", DisplayController::VERTE);
                $_SESSION['user']=[
                    'mail' => $data['mail'],
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
        // var_dump($data);
        $validation=$this->UserManager->addUser($data);
        if($validation){
            DisplayController::messageAlert("Veuillez vous connectez pour acceder a votre profil", DisplayController::ROUGE);
            unset($_SESSION['user']);
            header("Location: ".URL. "accueil");
            die();
            
        }else{
            DisplayController::messageAlert("Erreur au moment de l'inscription", DisplayController::ROUGE);
            header("Location: " . URL . "accueil");
            die();
        }
    }
    

    public function UpdateUser(){
        // verifier la connexion d'user
        if(!SecurityController::isLog()){
            header("Location: ".URL."login");
            die();
        }

        // recupere et stockage des données
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];

        // Mettez à jour les informations du profil de l'utilisateur actuellement connecté
        $utilisateur = new Utilisateur($this->UserManager->getInfosUser());

        $utilisateur->setNom($nom);
        $utilisateur->getId();
        $utilisateur->setPrenom($prenom);
        $utilisateur->setEmail($email);



        // var_dump($_SESSION);
        $data= $this->checkData();
        $update=$this->UserManager->updateUser($data);
        
        if($update){
            DisplayController::messageAlert('vos données ont été mis à jour', DisplayController::VERTE);
            header("Location: " . URL . "account/profil");
            die();
        }
    }
   
}