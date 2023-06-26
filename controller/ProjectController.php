<?php
require_once "model/manager.php";
require_once "model/project/project.php";
require_once "model/DbConnect.class.php";
require_once "model/user/UserManager.php";
require_once "model/project/ProjectManager.php";

class ProjectController extends AbstractController{

private $base; 

private $UserManager; //correspond à la classe userManager

private $ProjectManager;

private $project;

public function __construct()
{
    $this->base = new DbConnect("root", ""); //instanciation d'un objet PDO
    $this->UserManager= new UserManager($this->base); //créer un objet statement
    $this->ProjectManager = new ProjectManager($this->base); //instantier un objet ProjectManager
    $this->project= new Project(); // instancier un objet projets

}

public function addProject(){
    //Recherche toutes les infos de la personne connectée
    $mail=$_SESSION['user']['mail'];
    $data=$this->UserManager->getInfosUser($mail);
    require_once "view/user/addProjectForm.view.php";
}

// 2eme facon de faire une methode avec notions d'entitées
public function addProjectValidation(){
    // recupere les données du formulaire dans la BDD avec la methode checkdata
    $data= $this->checkData();
    $mail=$_SESSION['user']['mail'];
    $info = $this->UserManager->getInfosUser($mail);

    $this->project->setNom(($data['nom_project']));
    $this->project->setDescription(($data['description']));
    $this->project->setIdUser($info['id']);

        
    $validation = $this->ProjectManager->AddProject($this->project);
    if ($validation) {
        DisplayController::messageAlert("Le projet a été pris en compte", DisplayController::VERTE);
        header("Location: ".URL."account/addProject");
        die();
    }
}

}

?>