<?php $currentPage = basename(__FILE__) ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contactez Moi</title>
    <link rel="icon" href="/assets/icons/likoubra.png">

    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/contact.css">
</head>

<body>
    <?php require_once __DIR__ . '/pages/partials/header.php'?>

    <main>
        <?php require_once __DIR__ . '/pages/partials/aside.php' ?>

        <section>
            <article>
                <h1>Adresse E-Mail</h1>

                <strong title="Copier" class="copy">guewen.marechal@etudiant.univ-rennes.fr</strong>
            </article>

            <article>
                <h1>Numéro de téléphone</h1>

                <strong title="Copier" class="copy">07 . 80 . 46 . 69 . 62</strong>
            </article>
        </section>

        <!-- <form action="/controllers/mail.php" method="POST">
            <section>
                <label for="mail">E-Mail</label>
                <input type="email" name="mail" id="mail">
            </section>

            <section>
                <label for="subject">Sujet</label>
                <input type="text" name="subject" id="subject">
            </section>

            <section>
                <label for="message">Message</label>
                <textarea name="message" id="message"></textarea>
            </section>

            <?php if (isset($_GET['success'])): ?>
                <div class="success">
                    <p>Message envoyé avec succès</p>
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['error'])): ?>
                <div class="error">
                    <p>Une erreur est survenue</p>
                </div>
            <?php endif; ?>
            
            <input type="submit" value="Envoyer">
        </form> -->

        <?php require_once __DIR__ . '/pages/partials/up.php' ?>
    </main>

    <?php require_once __DIR__ . '/pages/partials/menu.php' ?>

    <?php require_once __DIR__ . '/pages/partials/footer.php' ?>

    <script src="/scripts/up.js"></script>
    <script src="/scripts/clickToCopy.js"></script>
</body>

</html>