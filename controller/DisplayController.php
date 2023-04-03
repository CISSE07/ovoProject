<?php

class DisplayController {

    const ROUGE= 'danger';

    const ORANGE = 'warning';

    const VERTE = 'success';

    public static function messageAlert($msg, $type){
        $_SESSION['alert']=[
            'type'=>$type,
            'msg'=> $msg
        ];
    }
}