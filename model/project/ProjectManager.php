<?php

class ProjectManager extends Manager{
    public function addProject(Project $project){
        $sql="INSERT INTO project (id, nom, suivis, id_user) VALUES (?,?,?,?)";
        $res=$this->getDb()->prepare($sql);
        $res->execute([$project->getId(),$project->getNom(),$project->getSuivi(),$project->getIdUser()]);
        $res=$res->rowCount();
        // si le resultat est vrai alors on ajoute sinon sa nous retourne faux
        return (($res===1) ? true : false);
    }
}