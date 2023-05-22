<?php
ob_start();
?>
    <!-- section banniere bienvenue id: baniereBvn-->
    <section id="baniereBvn">
        <h1>Bienvenue <?=$data['prenom']?></h1>
    </section>

    <section id="sect_contact">
        <div id="contact_txt">
            <h2>Ajouter un Projet</h2>
        </div>
        <div id="contact_form">
            <h3>Un nouveau projet en tête !</h3>
            <form action="<?= URL ?>account/addProjectValidation" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>Ajouter un article</legend>
                    <br>
                    <!-- nom du projet -->
                    <label for="nom">
                        Nom du projet  
                    </label>
                    <input type="text" name="nom" id="nom" placeholder="Nom du projet">
                    <br>
                    <!-- description du projet -->
                    <label for="description">
                        Description du projet  
                    </label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Description du projet..."></textarea>
                    <br>
                    <!-- btn submit -->
                    <button type="submit"> Ajouter </button>
                </fieldset>
            </form>
        </div>
    </section>
<?php
$content=ob_get_clean();
require_once "view/template.user.php";
