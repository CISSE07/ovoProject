<?php
ob_start();
?>
    <link rel="stylesheet" href="../style.css">
    <!-- section banniere bienvenue id: baniereBvn-->
    <section id="baniereBvn">
        <h1>Bienvenue <?=$data['prenom']?></h1>
    </section>

    <section id="addProject">
        <h2>Ajouter un Projet</h2>
        <form action="<?= URL ?>account/addProjectValidation" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Ajouter un article</legend>
                <br>
                <label for="nom">
                    Nom du projet  
                </label>
                <input type="text" name="nom" id="nom" placeholder="Nom du projet">
                <br>

                <button type="submit" name="ajouter"> Ajouter</button>
            </fieldset>
        </form>
    </section>
<?php
$content=ob_get_clean();
require_once "view/template.php";