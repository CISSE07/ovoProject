<?php
class AdminController extends AbstractController{
    public function dashboardAccess(){
        require_once "view/admin/admin.view.php";
    }
}