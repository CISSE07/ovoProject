<?php
    ob_start();
?>
<!-- s'inscrire -->
    
<section id="formInscrip">
        <h2>Inscription</h2>
        <form action="<?= URL ?>registerValidation" method="POST">
            <fieldset>
                <legend>S'inscrire chez ovo</legend>
                <input type="text" id="nom" name="lastname" placeholder="Votre nom" required>
                
                <input type="text" id="prenom" name="firstname" placeholder="Votre prénom" required>
            
                <input type="email" name="email" id="mail" placeholder="Votre mail" required>
            
                <input type="password" name="pass" id="pass" placeholder="Votre Mot" required>
            
                <button type="submit">S'inscrire</button>
            </fieldset>
        </form>
    </section>
    <hr>
   
<?php
$content=ob_get_clean();
require_once "view/template.php";
?>