<?php
    ob_start();
?>
<!-- s'inscrire -->
    
<section id="formInscrip">
        <h2>Inscription</h2>
        <form action="<?= URL ?>registerValidation" method="POST">
            <fieldset>
                <br>
                <legend>S'inscrire chez ovo</legend>
                <input type="text" id="nom" name="lastname" placeholder="Votre nom" required>
                <br>

                <input type="text" id="prenom" name="firstname" placeholder="Votre prénom" required>
                <br>

                <input type="email" name="mail" id="mail" placeholder="Votre mail" required>
                <br>

                <input type="password" name="pass" id="pass" placeholder="Votre Mot" required>
                <br>
                
                <button type="submit">S'inscrire</button>
            </fieldset>
        </form>
    </section>   
<?php
$content=ob_get_clean();
require_once "view/template.php";
?>