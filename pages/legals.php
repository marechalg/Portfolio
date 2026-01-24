<?php $currentPage = basename(__FILE__) ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>À Prosos</title>
    <link rel="icon" href="/assets/icons/likoubra.png">

    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/legals.css">
</head>

<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/header.php'?>

    <main>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/aside.php' ?>

        <h1>Mentions Légales</h1>

        <section>
            <h2>Éditeur du site</h1>
            <article>
                <p><strong>Éditeur :</strong> Guéwen Maréchal</p>
                <p><strong>Résidence :</strong> France</p>
                <p><strong>Email :</strong> guewen.marechal@etudiant.univ-rennes.fr</p>
                <p><strong>Téléphone :</strong> 07 80 46 69 62</p>
            </article>
        </section>

        <section>
            <h2>Hébergement</h2>
            <article>
                <p><strong>Hébergeur :</strong> Guéwen Maréchal</p>
                <p><strong>Adresse du serveur :</strong> 89.89.92.38, France</p>
            </article>
        </section>

        <section>
            <h2>Propriété Intelectuelle</h2>
            <article>
                <p>L'ensemble du contenu de ce site (textes, images, vidéos, codes) est la propriété exclusive de <strong>Guéwen Maréchal</strong>, sauf mention contraire indiquée dans la section <strong>Crédits</strong> ci-dessous.</p>
                <p>Toute reproduction, distribution ou utilisation sans autorisation préalable est interdite.</p>
            </article>
        </section>

        <section>
            <h2>Crédits</h2>
            <article>
                <p><strong>Images</strong></p>
                <ul>
                    <li>Logo Li Koubra : <a href="https://www.canva.com/ai-assistant" target="_blank">Canva AI</a> - Non-Exclusive License</li>
                    <li>Icône Github : <a href="https://www.svgrepo.com/author/bypeople/" target="_blank">bypeople</a> - PD License</li>
                    <li>Icône Linkedin : <a href="https://www.svgrepo.com/author/bypeople/" target="_blank">bypeople</a> - PD License</li>
                </ul>
                <p><strong>Polices</strong></p>
                <ul>
                    <li>Quicksand : <a href="https://fonts.google.com/?query=Andrew+Paglinawan" target="_blank" >Andrew Paglinawan</a> | SIL OFL</li>
                </ul>
                <!-- 
                <p><strong>Bibliothèques et Frameworks</strong></p>
                -->
            </article>
        </section>

        <section>
            <h2>Données Personnelles</h2>
            <article>
                <p>Ce site ne collecte aucune donnée personnelle. Aucun cookie n'est utilisé pour tracker les visiteurs.</p>
                <p>Si vous me contactez par email, vos données sont utilisées uniquement pour répondre à votre demande et ne sont pas conservées.</p>
            </article>
        </section>

        <section>
            <h2>Sécurité et Usages Interdits</h2>
            <article>
                <p>Toute tentative d'intrusion, d'attaque par déni de service (DDoS), d'injection de code, de force brute ou tout autre acte visant à compromettre la sécurité du site est strictement interdite et fera l'objet de poursuites judiciaires.</p>
                <p>L'utilisation abusive de ce site (scanning automatisé, scraping intensif...) peut entraîner le blocage de votre adresse IP.</p>
            </article>
        </section>

        <section>
            <h2>Limitation de Responsabilité</h2>
            <article>
                <p>Les informations présentes sur ce site sont fournies à titre indicatif. Je m'efforçe d'assurer l'exactitude des contenus, mais ne peux garantir l'absence d'erreurs.</p>
            </article>
        </section>

        <p><em>Dernière mise à jour : 24/01/2026</em></p>
    </main>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/footer.php' ?>
</body>

</html>