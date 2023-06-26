<?php
session_start();

//Ce fichier est le routeur de l'application web

/*
Création d'une constante qui redéfinit un lien absolu depuis http(s)
str_replace qui permet de supprimer index.php de la redéfinition de URL
*/
define("URL", str_replace("index.php","",
    (isset($_SERVER['https'])?"https":"http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"
    )
);

require_once 'controller/DisplayController.php';
require_once "controller/AbstractController.php";
require_once "controller/visitor/VisitorController.php";
require_once 'controller/user/UserController.php';
require_once "controller/SecurityController.php";
require_once "controller/ProjectController.php";
require_once "controller/admin/AdminController.php";


$visitor= new VisitorController();
$user= new UserController();
$project= new ProjectController();
$admin= new AdminController();



try{
    if (empty($_GET["page"])){
        $visitor->home();
    }else{
        $url= explode("/", filter_var($_GET["page"], FILTER_SANITIZE_URL));
        switch ($url[0]){
            case "accueil":
                $visitor->home();
                break;
            case "portfolio":
                $visitor->portfolio();
                break;
            case "expertise":
                $visitor->expertise();
                break;
            case "contact":
                $visitor->contact();
                break;
            case "register":
                $visitor->register();
                break;
            case "registerValidation":
                $user->registerValidation();
                break;
            case "login":
                $visitor->login();
                break;
            case "loginValidation":
                $user->loginValidation();
                break;
            case "account":
                if(!SecurityController::isLog()){
                    DisplayController::messageAlert("Il faut se connecter !", DisplayController::ROUGE);
                    header("Location: " . URL . "accueil");
                    die();
                } else{
                    switch ($url[1]){
                        case "profil":
                            $user->myProfil();
                            break;
                        case "updateValidation":
                            $user->UpdateUser();
                            break;// a faire.
                        case "logout":
                            $user->logout();
                            break;
                        case "addProject":
                            $project->addProject();
                            break;
                        case "addProjectValidation":
                            $project->addProjectValidation();
                            break;
                        case "delete":
                            $user->deleteUser();
                            break;
                        case "dashboard":
                            $admin->dashboardAccess();
                            break;
                    }
                }
            
        }

    }

}catch (Exception $e){
    $msg=$e->getMessage();
    require_once "view/error.view.php";
}



