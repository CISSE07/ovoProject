<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La raison d'être d’OVO consulting est de fournir des conseils et un accompagnement aux entreprises et aux entrepreneurs souhaitant se lancer dans le développement de projets web. Nous intervenons à tous les stades du projet, de la conception à la mise en ligne.">
    <meta name="keywords" content="Développement de sites web,Programmation web,E-commerce,Solutions web,Gestion de contenu ,Conseil informatique,Services informatiques,Transformation numérique">
    <title>OVO Consulting</title>
    <!-- pour avoir les icones font awesomes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="public/image/ovo_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="public\css\index.css" />

</head>
<body>
    <header>
        <!-- menu hamburger -->
        <div class="con">
            <input type="checkbox" id="check" data-valeur="change">
            <label for="check">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        <nav>
            <!-- menu desktop normal -->
            <ul id="nav">
                <li><a href="<?= URL.'accueil' ?>">Accueil</a></li>
                <li><a href="<?= URL.'portfolio' ?>">Portfolio</a></li>
                <li><a href="<?= URL.'expertise' ?>">Expertise</a></li>
                <li><a href="<?= URL.'contact' ?>">Contact</a></li>
            </ul>

        </nav>
        <figure>
            <a href="<?= URL.'accueil' ?>"><img src="public/image/ovo_logo.png" alt="ovo_logo"></a>
        </figure>
        <?php
            if (isset($_SESSION['user'])) :
        ?>
            <div id="btnHead">
                <button><a href="<?= URL.'account/profil' ?>">Mon Compte</a></button>
                <button><a href="<?= URL.'account/logout' ?>">Déconnexion</a></button>
            </div>
          <?php
            else:
          ?>
            <div id="btnHead">
                <button><a href="<?= URL.'register' ?>">S'inscrire</a></button>
                <button><a href="<?= URL.'login' ?>">Connexion </a></button>
            </div>
          <?php
            endif;
          ?>
    </header>
    <main>
        <?php
            if (isset($_SESSION['alert'])) :
                ?>
                <div id="module_alert">
                    <div class="alert-<?= $_SESSION['alert']['type'] ?>">
                        <?= $_SESSION['alert']['msg'] ?>
                    </div>
                </div>
            <?php
            endif;
            unset($_SESSION['alert']);
        ?>
        <?= $content ?>
    </main>
    <footer>
        <div class="footList">
            <ul>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
        </div>
        <div class="copyr">
            <p>&copy  2023. All rights reserved.</p>
        </div>

        <!-- reseau sociaux -->
        <div class="rSoc">
            <ul>
                <li><a href="https://www.instagram.com/?hl=fr"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/company/ovo-consulting-75/"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
        </div>
    </footer>
</body>
<script src="./script.js"></script>
</html>