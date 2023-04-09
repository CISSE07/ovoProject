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
    // fonctionnalité de récuperation du mail du user 
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
        $res->execute([$data['lastname'],$data['firstname'],$data['email'],$mdp,1]);
        // var_dump($data['email']);
        $res=$res->rowCount();
        // si le resultat est vrai alors on ajoute sinon sa nous retourne faux
        return (($res===1) ? true : false);
    }
    public function updateUser($data){
        $sql='UPDATE user SET nom = ?, prenom = ?, mail = ? WHERE id = ?';
        $res=$this->getDb()->prepare($sql);
        $res->execute([$data['lastname'],$data['firstname'],$data['email'],$_SESSION['user']['id']]);
        $res=$res->rowCount();
        // si le resultat est vrai alors on ajoute sinon sa nous retourne faux
        return (($res===1) ? true : false);
    }

}