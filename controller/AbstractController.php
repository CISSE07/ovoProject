<?php

abstract class AbstractController{
    /**
     * @return array
     * @throws Exception
     */
    public function checkData(){
        foreach ($_POST as $key=>$value){
            // var_dump($value);
            $valid=(isset($value) && !empty($value))? htmlspecialchars($value) : null;
            if ($valid==null){
                throw new Exception("Données non validées le champs n'est pas rempli, veuillez remplir le champs");
            }
            $tab[$key]=$valid;
        }
        return $tab;
    }
}