<?php
    ob_start();
?>
 <!-- section card expertise-->
 <section id="expertise">
        <h2>Notre expertise</h2>
        <div id="sect_expertCards">
            <div class="expertCard">
                <div class="expertCard_img">
                    <img src="public\image\Star.png" alt="etoile symbole de la creation">
                </div>
                <div class="expertCard_txt">
                    <h3>Création de site web</h3>
                    <p>
                        Internet a créé des conditions équitables pour les entreprises de toutes tailles. Les sites Web sont un puissant outil de marketing et de vente.
                         Ils peuvent être utilisés pour générer des prospects, réaliser des ventes et établir des relations avec les clients.
                    </p>
                </div>
            </div>
            <div class="expertCard">
                <div class="expertCard_img">
                    <img src="public\image\checked.png" alt="valider symbole de la creation de l'appli">
                </div>
                <div class="expertCard_txt">
                    <h3>Création d'app</h3>
                    <p>
                        Les applications mobiles offrent un certain nombre d'avantages aux entreprises, notamment une visibilité accrue,
                         un service client amélioré et une nouvelle avenue pour le marketing et les ventes.
                    </p>
                </div>
            </div>
            <div class="expertCard">
                <div class="expertCard_img">
                    <img src="public\image\Show.png" alt="valider symbole du seo">
                </div>
                <div class="expertCard_txt">
                    <h3>SEO & SEA</h3>
                    <p>
                        Dans le monde numérique d'aujourd'hui, les entreprises doivent être visibles en ligne afin de générer des prospects et des ventes. C'est là que le SEO et le SEA entrent en jeu. 
                        Bien que le SEO et le SEA soient tous deux importants, ils servent des objectifs différents et obtiennent des résultats différents.
                    </p>
                </div>
            </div>
            <div class="expertCard">
                <div class="expertCard_img">
                    <img src="public\image\Lock.png" alt="la serrure symbole du branding">
                </div>
                <div class="expertCard_txt">
                    <h3>Branding</h3>
                    <p>
                        L'image de marque c'est la totalité de l'identité de votre entreprise et de la façon dont elle est présentée au monde. 
                        Une marque forte peut vous aider à attirer de nouveaux clients, à obtenir des financements et même à exiger un prix plus élevé pour vos produits ou services.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- section fonctionnement -->
    <section id="sect_fonct">
        <div class="boxImage">
            <img src="public\image\Man-04.png" alt="mascotte au telephone">
        </div>
        <div class="boxText">
            <h5>Notre Fonctionnement</h5>
            <h2>Le processus créatif</h2>
            <p>
                OVO consulting c'est une équipe d'expert utilisant ses compétences au services de vos besoins digitaux pour répondre à des objectifs élevés.
            </p>
            <div id="etape">
                <p><span>01</span> Comprendres le contexte, vos besoins et contraintes.</p>
                <p><span>02</span> Définir la solution digitale la plus adaptée.</p>
                <p><span>03</span> Développer la solution digitale</p>
                <p><span>04</span> Vous accompagner dans le développement et l'amélioration de vos solutions digitales</p>
            </div>
            <div>
                <button><a href="<?= URL.'register' ?>">S'INSCRIRE</a></button>
            </div>
        </div>
    </section>
<?php
$content=ob_get_clean();
require_once "view/template.php";
?>
