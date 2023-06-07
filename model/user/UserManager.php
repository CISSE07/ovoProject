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
        // var_dump($mail);
        $sql="SELECT * FROM user WHERE mail=?";
        $res=$this->getDb()->prepare($sql);
        $res->execute([$mail]);
        $data=$res->fetch();
        // var_dump($data);
        // var_dump($_SESSION);
        // // echo('<br>');
        return $data;
    }
    // public function getUserId($mail){
    //     $sql = "SELECT id FROM user WHERE id=?";
    //     $res = $this->getDb()->prepare($sql);
    //     $res->execute([$mail]);
    //     $data = $res->fetch();
    //     var_dump($data);

    //     return $data;
    // }

    public function addUser($data){
        $mdp = password_hash($data['pass'], PASSWORD_DEFAULT);
        $sql="INSERT INTO user (nom,prenom,mail,pass,is_valid) VALUES (?,?,?,?,?)";
        $res=$this->getDb()->prepare($sql);
        $res->execute([$data['nom'],$data['prenom'],$data['mail'],$mdp,1]);
        // var_dump($data['email']);
        $res=$res->rowCount();
        // si le resultat est vrai alors on ajoute sinon sa nous retourne faux
        return (($res===1) ? true : false);
    }
    
    public function updateUser($data){
        $sql='UPDATE user SET nom = ?, prenom = ? WHERE mail = ?';
        $res=$this->getDb()->prepare($sql);
        // var_dump($data);
        $res->execute([$data['nom'],$data['prenom'],$data['mail']]);
        // var_dump($_SESSION['user']);
        $res=$res->rowCount();
        // si le resultat est vrai alors on ajoute sinon sa nous retourne faux
        return (($res===1) ? true : false);
    }

    // supprimer mon compte 
    public function deleteUser($mail){
        $sql = 'DELETE FROM user WHERE mail = ?';
        $res = $this->getDb()->prepare($sql);
        $res->execute([$mail]);
        $rowCount = $res->rowCount();
        // Si le résultat est vrai (1 ligne supprimée), retourne vrai, sinon retourne faux
        return ($rowCount === 1) ? true : false;
    }

}