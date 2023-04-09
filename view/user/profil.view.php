<?php
    ob_start();
?>
    <link rel="stylesheet" href="../style.css">
    <!-- section banniere bienvenue id: baniereBvn-->
    <section id="baniereBvn">
        <h1>Bienvenue <?=$data['prenom']?></h1>
    </section>

    <!-- section profil -->
    <section id="profil">
        <h2>Mon Profil</h2>
        <form action="<?= URL ?>updateUser" method="post">
            <fieldset>
                <legend>Modifier mon profil</legend>
                <br>
                <label for="fname">Prénom</label>
                <input type="text" id="fname" name="firstname" placeholder=" <?php if(isset($data['prenom'])){echo $data['prenom'];} ?>" >

                <br>
                <label for="lname">Nom</label>
                <input type="text" id="lname" name="lastname" placeholder="<?php if(isset($data['nom'])){echo $data['nom'];} ?>">
            
                <br>
                <label for="mail">Mail</label>
                <input type="email" name="email" id="mail" placeholder="<?php if(isset($data['mail'])){echo $data['mail'];} ?>">
            
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
              <th>Suivie</th>
            </tr>
            <tr>
              <td>f</td>
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
    <section id="newProject">
        <a href="<?= URL ?>account/addProject">Ajouter un projet</a>
    </section>    
<?php
$content=ob_get_clean();
require_once "view/template.php";
?>
