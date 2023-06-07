<?php

class ProjectManager extends Manager{
    public function AddProject(Project $project){
        $sql="INSERT INTO project (nom_project, description, id_user) VALUES (?,?,?)";
        $res=$this->getDb()->prepare($sql);
        $res->execute([$project->getNom(),$project->getDescription(),$project->getIdUser()]);
        $res=$res->rowCount();
        // si le resultat est vrai alors on ajoute sinon sa nous retourne faux
        return (($res===1) ? true : false);
    }
    // public function showProject(Project $project){
    //     $sql= " SELECT nom_project,description from project INNER JOIN user ON project.id_user = user.id";
    //     $res=$this->getDb()->prepare($sql);
    //     $res->execute();

    //     $projects = $res->fetchAll(PDO::FETCH_ASSOC);

    //     return $projects;
    // }
}