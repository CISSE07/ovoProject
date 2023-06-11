<?php
ob_start();
?>
<h1>c'est bon</h1>

<?php
$content=ob_get_clean();
require_once "view/template.user.php";