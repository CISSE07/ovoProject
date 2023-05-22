<?php
    ob_start();
?>

    <section id="sect_contact">
        <div id="contact_txt">
            <h5>Faire Notre Connaissance</h5>
            <h2>Un projet en tête ? Parlons en !</h2>
            <p>
                Ovo Consulting reste à votre disposition si vous voulez échanger sur des idées de projets. N'hésitez pas à nous contacter !
            </p>
        </div>
        <div id="contact_form">
            <h3>Envoyez-nous un message !</h3>
            <form action="" method="post">
                <fieldset>
                    <legend>Parlons en ! </legend>
                    <input type="text" name="nom" id="nom" placeholder="Votre nom et prénom" required>
                    <input type="email" name="mail" id="mail" placeholder="Votre Email" required >
                    <input type="text" name="project" id="project" placeholder="Votre site web">
                    <input type="tel" name="telephone" id="tel" placeholder="Votre numero de téléphone" required>
                    <textarea name="textarea-219" cols="40" rows="10" placeholder="Message" required></textarea>
                    <button type="submit">Envoyer</button>
                </fieldset>
            </form>
        </div>
    </section>
<?php
$content=ob_get_clean();
require_once "view/template.php";
?>
