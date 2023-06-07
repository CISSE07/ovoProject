<?php
    ob_start();
?>
    <!-- formulaire de connexion -->
    <section id="formConnect">
        <h2>Connexion</h2>
        <form action="<?= URL ?>loginValidation" method="POST" id="bottom">
            <fieldset>
                <legend>Votre espace client</legend>
                <label for="mail" >Email de connexion :</label>
                <input type="email" name="mail" id="mail" placeholder="Entrer votre mail de connexion" required>
                
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" placeholder="Entrer le mot de passe" minlength="8" required>
                <br>
                
                <button type="submit">Connexion</button>
            </fieldset>
        </form>

    </section>
<?php
$content=ob_get_clean();
require_once "view/template.php";
?>