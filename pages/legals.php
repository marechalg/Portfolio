<?php $currentPage = basename(__FILE__) ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mentions Légales</title>
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
                <p><strong>Éditeur :</strong> Guéwen MARÉCHAL</p>
                <p><strong>Résidence :</strong> France</p>
                <p><strong>Email :</strong> <a href="/contact" target="_blank">guewen.marechal@etudiant.univ-rennes.fr</a></p>
                <p><strong>Directeur de publication :</strong> Guéwen MARÉCHAL</p>
            </article>
        </section>

        <section>
            <h2>Hébergement</h2>
            <article>
                <p><strong>Hébergeur :</strong> Guéwen MARÉCHAL</p>
                <p><strong>Adresse du serveur :</strong> 89.89.92.38, France</p>
            </article>
        </section>

        <section>
            <h2>Accessibilité</h2>
            <article>
                <p>Je m'efforçe de rendre ce site accessible au plus grand nombre. Le site vise une conformité partielle au niveau AA des WCAG 2.1.</p>
                <p>Éléments d'accessibilité mis en place : contrastes de couleurs suffisants, navigation au clavier, textes alternatifs sur les images, titres hiérarchisés.</p>
                <p>Si vous rencontrez des difficultés d'accès, contactez-nous à <a href="/contact" target="_blank">guewen.marechal@etudiant.univ-rennes.fr</a> pour que je puisse améliorer votre expérience.</p>
            </article>
        </section>

        <section>
            <h2>Propriété Intelectuelle</h2>
            <article>
                <p>L'ensemble du contenu de ce site (textes, images, vidéos) est la propriété exclusive de Guéwen MARÉCHAL, sauf mention contraire indiquée dans la section <a href="#credits">Crédits</a> ci-dessous.</p>
                <p>Le code source de ce site est distribué sous Licence MIT et est disponible sur <a href="http://github.com/marechalg/Portfolio" target="_blank">GitHub</a>. Vous êtes libre de l'utiliser, le modifier et le distribuer selon les termes de cette licence.</p>
                <p>Toute reproduction, distribution ou utilisation du contenu (hors code) sans autorisation préalable est interdite.</p>
            </article>
        </section>

        <section id="credits">
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
                <p><strong>Avertissement sécurité :</strong> Ce site utilise actuellement le protocole HTTP non sécurisé. Les échanges ne sont pas chiffrés et peuvent potentiellement être interceptés par des tiers. Évitez de transmettre des informations sensibles ou confidentielles via ce site.</p>
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

        <section>
            <h2>Droit Applicable et Juridiction Compétente</h2>
            <article>
                <p>Les présentes mentions légales sont régies par le droit français. En cas de litige et à défaut de résolution amiable, les tribunaux français seront seuls compétents.</p>
            </article>
        </section>

        <p><em>Ces mentions légales peuvent être modifiées à tout moment pour refléter les évolutions du site ou de la législation. Il est conseillé de les consulter régulièrement.</em></p>

        <p><em>Dernière mise à jour : 24/01/2026</em></p>
    </main>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/footer.php' ?>

    <script src="/scripts/legals.js" type="module"></script>
</body>

</html>