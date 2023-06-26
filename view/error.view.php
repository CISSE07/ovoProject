<?php
    ob_start();
?>

   <h3> 
        <?php echo $msg; ?>
   </h3>

<?php
$content=ob_get_clean();
require_once "./view/template.user.php";
?>