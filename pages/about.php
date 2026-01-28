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
                    <li>
                        <?php if (preg_match('/(android|iphone|ipad|mobile)/i', $_SERVER['HTTP_USER_AGENT'] ?? '')): ?>
                            <a href="/assets/cv.pdf" target="_blank"><button>Consulter</button></a>
                        <?php else: ?>
                            <button id="view">Consulter</button>
                        <?php endif; ?>
                    </li>
                </ul>
            </article>
        </section>
        <dialog id="cv">
            <button autofocus style="position:absolute;opacity:0;pointer-events:none"></button>
            <iframe src="/assets/cv.pdf" frameborder="0" id="pdf"></iframe>
        </dialog>

        <section class="diploms">
            <h1>Diplômes et Formations</h1>

            <ul>
                <article>
                    <div class="time">2024 - Auj.</div>
                    <h2>BUT Informatique</h2>
                    <strong>IUT de Lannion</strong>
                    <strong title="Développement d'applications">Parcours A</strong>
                    <p>Formation en développement logiciel, bases de données, réseaux et systèmes, sur 3 ans. Spécialisation en optimisation et développement d'applications.</p>
                    <em>En cours - 2<sup>ème</sup> année</em>
                </article>

                <article>
                    <div class="time">2021 - 2024</div>
                    <h2 title="Sciences Technologiques de l'Industrie et du Développement Durable">BAC STI2D</h2>
                    <strong>Lycée Polyvalent Chaptal à Saint-Brieuc</strong>
                    <strong title="Systèmes d'Informations et Numérique">Spécialité SIN</strong>
                    <p>Formation scientifique avec approfondissement en informatique, éléctronique et conception.</p>
                    <em>Mention Assez Bien</em>
                </article>

                <article>
                    <div class="time">2022 - 2024</div>
                    <h2>Certificat d'Études Musicales</h2>
                    <strong>Conservatoire de Saint-Brieuc</strong>
                    <strong>Euphonium</strong>
                    <p>Diplôme validant la fin de 3ème cycle de pratique instrumentale.</p>
                    <em>Mention Très Bien</em>
                </article>

                <article>
                    <div class="time">2021</div>
                    <h2 title="Sciences Technologiques de l'Industrie et du Développement Durable">Premiers Secours Citoyen</h2>
                    <strong>Collège Jean Racine à Saint-Brieuc</strong>
                    <p>Formation de premiers secours, dans le cadre de la Classe Défense et Sécurité Globale.</p>
                </article>
            </ul>
        </section>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/up.php' ?>
    </main>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/footer.php' ?>

    <script src="/scripts/parallaxe.js"></script>
    <script src="/scripts/up.js"></script>
    <script src="/scripts/cv.js"></script>
</body>

</html>