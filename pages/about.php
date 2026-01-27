<?php $currentPage = basename(__FILE__) ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>À Propos</title>
    <link rel="icon" href="/assets/icons/likoubra.png">

    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/about.css">
</head>

<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/header.php'?>

    <main>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/aside.php' ?>

        <section class="about">
            <ul>
                <article>
                    <figure>
                        <div class="frame"></div>
                        <figcaption>Guéwen Maréchal</figcaption>
                    </figure>

                    <p>Étudiant en BUT Informatique</p>

                    <p>Passioné par le développement et l'optimisation</p>
                </article>

                <article>
                    <h1>À Propos de Moi</h1>

                    <h2>Parcours</h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;Étudiant en première année de BUT Informatique à l'Université de Rennes, je me spécialise dans le développement logiciel et l'optimisation système. Ma passion pour la programmation m'a conduit à explorer diverses technologies et langages, avec un intérêt particulier pour les scripts d'automatisation et l'amélioration des performances.</p>
                
                    <h2>Profil</h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;Rigoureux et persévérant, j'aborde chaque projet avec méthodologie et créativité. Je recherche actuellement une alternance en développement et optimisation logicielle pour approfondir mes compétences techniques tout en contribuant à des projets concrets.</p>
                
                    <h2>Objectifs</h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;À long terme, mon objectif est d'intégrer une école d'ingénieur en cybersécurité pour me spécialiser dans ce domaine qui me passionne. Je souhaite développer mes compétences en sécurité informatique et contribuer à la protection des systèmes d'information dans un monde de plus en plus connecté.</p>
                </article>
            </ul>

            <article class="cv">
                <h1>Curriculum Vitae</h1>

                <p>Découvrez mon parcours, mes compétences techniques et mes expériences dans mon CV</p>

                <ul>
                    <li><a href="/assets/cv.pdf" download><button>Télécharger</button></a></li>
                    <li><button id="view">Consulter</button></li>
                </ul>
            </article>
        </section>

        <dialog id="cv">
            <button autofocus style="position:absolute;opacity:0;pointer-events:none"></button>
            <iframe src="/assets/cv.pdf" frameborder="0" id="pdf"></iframe>
        </dialog>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/up.php' ?>
    </main>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/footer.php' ?>

    <script src="/scripts/parallaxe.js"></script>
    <script src="/scripts/up.js"></script>
    <script src="/scripts/cv.js"></script>
</body>

</html>