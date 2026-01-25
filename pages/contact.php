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
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/header.php'?>

    <main>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/aside.php' ?>

        <form action="/controllers/mail.php" method="POST">
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
        </form>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/up.php' ?>
    </main>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/footer.php' ?>

    <script src="/scripts/up.js"></script>
</body>

</html>