<?php 

class UserManager extends Manager{

    public function getPasswordUser($mail){
        //Recherche du mdp de la BDD en fonction du mail
        $sql="SELECT pass FROM user WHERE mail=?";
        $res=$this->getDb()->prepare($sql);
        $res->execute([$mail]);
        $pass=$res->fetch();
        return $pass['pass'];
    }

    public function verifyPassword($mail, $password){
        $mdp=$this->getPasswordUser($mail);
        return password_verify($password, $mdp);
    }
 
    public function accountValid($mail){
        //cherche le statut du compte (valide ou non)
        $sql= "SELECT is_valid FROM user WHERE mail=?";
        $res=$this->getDb()->prepare($sql);
        $res->execute([$mail]);
        $valid=$res->fetch();
        return (($valid['is_valid']===0) ? false : true);
    }
    // fonctionnalité de récuperationles infos d'apres le mail du user 
    public function getInfosUser($mail){
        $sql="SELECT * FROM user WHERE mail=?";
        $res=$this->getDb()->prepare($sql);
        $res->execute([$mail]);
        $data=$res->fetch();
        
        return $data;
    }
    

    public function addUser($data){
        $mdp = password_hash($data['pass'], PASSWORD_DEFAULT);
        $sql="INSERT INTO user (nom,prenom,mail,pass,is_valid) VALUES (?,?,?,?,?)";
        $res=$this->getDb()->prepare($sql);
        $res->execute([$data['nom'],$data['prenom'],$data['mail'],$mdp,1]);
        $res=$res->rowCount();
        // si le resultat est vrai alors on ajoute sinon sa nous retourne faux
        return (($res===1) ? true : false);
    }
    
    public function updateUser($data){
        $sql='UPDATE user SET nom = ?, prenom = ? WHERE mail = ?';
        $res=$this->getDb()->prepare($sql);
        $res->execute([$data['nom'],$data['prenom'],$data['mail']]);
        $res=$res->rowCount();
        // si le resultat est vrai alors on ajoute sinon sa nous retourne faux
        return (($res===1) ? true : false);
    }

    // supprimer mon compte 
    public function deleteUser($mail){
        $sql = 'BEGIN;
                DELETE FROM project WHERE id_user = (SELECT id FROM user WHERE mail = ?);
                DELETE FROM user WHERE mail = ?;
                COMMIT;';
        $res = $this->getDb()->prepare($sql);
        $res->execute([$mail, $mail]);
        $rowCount = $res->rowCount();
        // Si le résultat est vrai (1 ligne supprimée), retourne vrai, sinon retourne faux
        return ($rowCount === 1) ? true : false;
    }

    public function getProjectUser($mail){
        $sql = 'SELECT nom_project, description FROM user INNER JOIN project ON user.id=project.id_user where mail=?';
        $res = $this->getDb()->prepare($sql);
        $res->execute([$mail]);
        $projects=$res->fetchAll();
        return $projects;
    }

    // les clients et leurss infos a montrer sur le profil de l'admin
    public function getUsers(){
        $sql = 'SELECT nom ,prenom, mail from user where id_role = 2;';
        $res = $this->getDb()->prepare($sql);
        $res->execute();
        $users=$res->fetchAll();
        return $users;
    }

}