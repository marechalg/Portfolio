<?php $currentPage = basename(__FILE__) ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Guéwen Maréchal</title>
    <link rel="icon" href="/assets/icons/likoubra.png">

    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/home.css">
</head>

<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/header.php' ?>

    <main>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/aside.php' ?>

        <section>
            <article>
                <h1>Guéwen Maréchal</h1>
                <h2>Étudiant en BUT Informatique</h2>
                <ul>
                    <li><button id="about">À Propos</button></li>
                    <li><button id="contact">Contacter</button></li>
                    <script src="/scripts/buttons.js"></script>
                </ul>
            </article>

            <article>
                <p>“ Étudiant en 2<sup>ème</sup> année de BUT Informatique parcours développement d'applications, je suis passionné par les scripts d’optimisation et de conception. Rigoureux et persévérant, je recherche un stage et une alternance en développement et optimisation logicielle ou système „</p>
            </article>
        </section>
    </main>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/footer.php' ?>

    <script src="/scripts/up.js"></script>
</body>

</html>