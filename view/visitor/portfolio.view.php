<?php
    ob_start();
?>
<section id="sect_portfolio">
        <h2>galerie de portfolio</h2>
        <!-- 6 projets realiser par OVO-->
        <div class="projects">
            <div class="project">
                <figure class="project_img">
                    <a href="https://www.x-clusif.com/"><img src="public\image\projet-x-clusif.png" alt="projet x-clusif"></a>                
                </figure>
                <div class="project_content">
                    <h3><a href="https://www.x-clusif.com/">Projet x-clusif</a></h3>
                    <button><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>   
                </div>
            </div>
            <div class="project">
                <figure class="project_img">
                    <a href="https://www.bmw.am/en/index.html"><img src="public\image\projet-bmw.png" alt="projet-bmw"></a>
                </figure>
                <div class="project_content">
                    <h3><a href="https://www.bmw.am/en/index.html">projet bwm</a></h3>
                    <button><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>
                </div>
            </div>
            <div class="project">
                <figure class="project_img">
                    <a href="https://jobjob-app.com/"><img src="public\image\projet-jobjob-1.png" alt="projet-jobjob"></a>
                </figure>
                <div class="project_content">
                    <h3><a href="https://jobjob-app.com/">projet jobjob</a></h3>
                    <button><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>
                </div>
            </div>
            <div class="project">
                <figure class="project_img">
                    <a href="http://www.antiquitedufutur.com/"><img src="public\image\projet-antiquitedufutur.png" alt="projet-antiquitedufutur"></a>
                </figure>
                <div class="project_content">
                    <h3><a href="http://www.antiquitedufutur.com/">projet antiquité du futur</a></h3>
                    <button><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>
                </div>
            </div>
            <div class="project">
                <figure class="project_img">
                    <a href="https://la-java.fr/"><img src="public\image\projet-lajava.png" alt="projet-lajava"></a>
                </figure>
                <div class="project_content">
                    <h3><a href="https://la-java.fr/">projet la java</a></h3>
                    <button><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>
                </div>
            </div>
            <div class="project">
                <figure class="project_img">
                    <a href="https://lve-app.com/"><img src="public\image\projet-lve-1.png" alt="projet-lve"></a>
                </figure>
                <div class="project_content">
                    <h3><a href="https://lve-app.com/">projet l've</a></h3>
                    <button><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>
                </div>
            </div>
        </div>
        
    </section>
    <hr>
    <!-- entreprises partenaires -->
    <section id="reference">
        <h2>nos références</h2>
        <div id="nosRef">
            <figure class="logoRef">
                <a href="https://www.bmw.am/en/index.html"><img src="public\image\logo-BMW.png" alt="logo BMW"></a>
            </figure>
            <figure class="logoRef">
                <a href="https://jobjob-app.com/"><img src="public\image\logo-jobjob.png" alt="logo jobjob"></a>
            </figure>
            <figure class="logoRef">
                <a href="https://la-java.fr/"><img src="public\image\logo-lajava.png" alt="logo lajava"></a>
            </figure>
            <figure class="logoRef">
                <a href="https://lve-app.com/"><img src="public\image\logo-lve.png" alt="logo l've"></a>
            </figure>
            <figure class="logoRef">
                <a href="https://lve-app.com/"><img src="public\image\logo-lvepro.png" alt="logo l've pro"></a>
            </figure>
            <figure class="logoRef">
                <a href="https://www.x-clusif.com/"><img src="public\image\logo-xclusif.png" alt="logo x-clusif"></a>
            </figure>
            
        </div>
    </section>
<?php
$content=ob_get_clean();
require_once "view/template.php";
?>