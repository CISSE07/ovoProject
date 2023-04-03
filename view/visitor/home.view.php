<?php
    ob_start();
?>
<section id="section1">
        <div class="boxRight">
            <!-- le h5 ici est le titre petit avec le gradient -->
            <div>
                <h5>Des Idées, Des Projets, Des Résultats !</h5>
            </div>
            <div >
                <h1>Bring something big together !</h1>
                <p>OVO Consulting est une société de conseil française qui se focalise notamment sur le conseil en ingénierie informatique, technologique et robotique.</p>
            </div>
            <div>
                <button class="btnContact"><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>
            </div>
        </div>
        <div class="boxLeft">
            <img src="public\image\Man-03.png" alt="mascotte_ovo">
        </div>
    </section>

    <!-- section vision de l'entreprise -->
    <section id="section2">
        <div class="boxImage">
            <img src="public\image\Man-01.png" alt="mascote_ovo">
        </div>
        <div class="boxText">
            <h5>Votre vision</h5>
            <h2>Solutions digitales pour votre business</h2>
            <p>La raison d'être d’OVO consulting est de fournir des conseils et un accompagnement aux entreprises et aux entrepreneurs souhaitant se lancer dans le développement de projets web. Nous intervenons à tous les stades du projet, de la conception à la mise en ligne.</p>
            <div>
                <button class="btnContact"><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>
            </div>
        </div>
    </section>
<?php
$content=ob_get_clean();
require_once "view/template.php";
?>
