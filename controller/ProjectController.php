<?php
require_once "model/manager.php";
require_once "model/project/ProjectManager.php";
require_once "model/user/UserManager.php";
require_once "model/DbConnect.class.php";

class ProjectController extends AbstractController{

    private $base; //correspond à votre objet PDO

    private $UserManager; //correspond à la classe userManager

    private $ProjectManager;

    public function __construct()
    {
        $this->base = new DbConnect(); //instanciation d'un objet PDO
        $this->UserManager= new UserManager($this->base); //créer un objet statement
    }

    public function addProject(){
       require_once "view/user/addProjectForm.view.php";
   }

   // 2eme facon de faire une methode avec notions d'entitées
   public function addProjectValidation(){
       // recupere les données du formulaire dans la BDD avec la methode checkdata
       $data= $this->checkData();
       $mail= $_SESSION['user']['mail'];
       $infos= $this->UserManager->getInfosUser($mail);// if
       var_dump($data);
       $project = new Project(); // instancier un objet articles
       $project->setId(($data['id']));
       $project->setNom(($data['nom']));
       $project->setSuivi(($data['suivis']));
       $project->setIdUser($infos['id']);

       $this->ProjectManager->addProject($project);


   }
}

?>