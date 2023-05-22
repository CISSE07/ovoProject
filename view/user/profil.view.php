<?php
    ob_start();
?>
    <!-- section banniere bienvenue id: baniereBvn-->
    <section id="baniereBvn">
        <h1>Bienvenue <?=$data['prenom']?></h1>
    </section>
    <?php
        // var_dump($_SESSION);
        // var_dump($data);
    ?>
    <!-- section profil -->
    <section id="profil">
        <h2>Mon Profil</h2>
        <form action="<?= URL ?>account/updateValidation" method="POST">
            <fieldset>

                <legend>Modifier mon profil</legend>
                <br>
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder=<?=$data['prenom']?>>

                <br>
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder=<?=$data['nom']?>>
            
                <br>
                <label for="mail">Mail</label>
                <input type="email" name="mail" id="mail" placeholder=<?=$data['mail']?>>
            
                <button type="submit">Modifier</button>
            </fieldset>
        </form>
    </section>
    <hr>
    <!-- section suivi du projet -->
    <section id="suivi">
        <h2>Suivi du projet</h2>
        <table>
            <tr>
              <th>Projets</th>
              <th>Description</th>
            </tr>
            <tr>
              <td>  <?=$data['nom']?> </td>
              <td>f</td>
            </tr>
            <tr>
              <td>s</td>
              <td>s</td>
            </tr>
            <tr>
                <td>t</td>
                <td>t</td>
              </tr>
          </table>
    </section>
    <section id="sect_portfolio">
        <button>
            <a href="<?= URL ?>account/addProject">Ajouter un projet</a>
        </button>
    </section>    
<?php
$content=ob_get_clean();
require_once "view/template.user.php";
?>
