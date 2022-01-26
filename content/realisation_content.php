<?php include('content/data_realisations.php');?>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="cta-inner bg-faded text-center rounded bg-light">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Coming Soon</span>
                        <span class="section-heading-lower">VOS RÉALISATIONS</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <?php 
                        sort($etudiants);
                        foreach ($etudiants as $key => $value) : ?>
                            <li class="list-unstyled-item list-hours-item d-flex" style="justify-content: space-between"> 
                                <?=$value["nom"] ?>
                                <a class="ml-auto" target="_blank" href="<?=$value["url"]?> "> Portfolio </a>
                             </li>
                        <?php endforeach ?>

                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>Promo 2021-2022</strong>
                            <br />
                            Concepteurs & développeurs d'application
                        </em>
                    </p>
                    <p class="mb-0">
                        <small><em>Needemand</em></small>
                        <br />
                        contact@needemand.com
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/delai.jpg" alt="..." />
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Projet Fil Rouge</span>
                            <span class="section-heading-lower">Contexte</span>
                        </h2>
                        <p>Projet réalisé dans le cadre d'une formation. En partie en groupe et en partie individuellement, ce projet est le résultat d'un apprentissage lors d'une formation.</p>
                        <p class="mb-0">Temps de réalisation du projet 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>