<?php $currentPage = basename(__FILE__) ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mes Projets</title>
    <link rel="icon" href="/assets/icons/likoubra.png">

    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/projects.css">
</head>

<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/header.php'?>

    <main>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/aside.php' ?>

        <h1>Mes Projets</h1>

        <section>
            <figure class="wrapper" id="perso">
                <?php require $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/arrow.php' ?>
                <h2>Personnels</h2>
            </figure>

            <ul>
                <article>
                    <figure>
                        <img src="/assets/icons/flag.svg" alt="flag">
                        <figcaption>Countrydex</figcaption>
                    </figure>
                    <p>Bot Discord gamifié : capturez des drapeaux en identifiant les pays le plus vite possible. Systèmes de collection, classement et statistiques intégrés</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>Node.js</div>
                        <div>PostgreSQL</div>
                        <div>JSON</div>
                        <div>discord.js</div>
                    </div>
                    <button>En savoir plus</button>

                    <dialog>
                        
                    </dialog>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/cards.svg" alt="cards">
                        <figcaption>Wild West Saloon</figcaption>
                    </figure>
                    <p>Jeu de BlackJack dans une application web, proposant une interface moderne et ergonomique, tout en conservant un esprit de Salon du Far West</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>PHP</div>
                        <div>PostgreSQL</div>
                        <div>TypeScript</div>
                        <div>SCSS</div>
                        <div>POO</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/docs.svg" alt="docs">
                        <figcaption>Portfolio</figcaption>
                    </figure>
                    <p>Site web vitrine de mes projets, compétences et autres informations professionnelles</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>PHP</div>
                        <div>JavaScript</div>
                        <div>HTML / CSS</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/roman.svg" alt="roman">
                        <figcaption>Roman</figcaption>
                    </figure>
                    <p>Simple extension chrome pour convertir tous les nombres en chiffres romains</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>JavaScript</div>
                        <div>HTML / CSS</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/syncCount.svg" alt="syncCount">
                        <figcaption>syncCount</figcaption>
                    </figure>
                    <p>Compteur collaboratif synchronisé entre les utilisateurs avec un système de classements et statistiques</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>TypeScript</div>
                        <div>JavaScript</div>
                        <div>Web Sockets</div>
                        <div>HTML / CSS</div>
                        <div>JSON</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/ddos.png" alt="ddos">
                        <figcaption>Outil de test de charge et robustesse</figcaption>
                    </figure>
                    <p>Outil de simulation DDoS contrôlée, avec métriques détaillées de performances et de résilience du serveur</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>C</div>
                        <div>WRK</div>
                        <div>Cybersécurité</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/globe.svg" alt="globe">
                        <figcaption>Interchat</figcaption>
                    </figure>
                    <p>Bot Discord permettant l'inter-communication entre plusieurs serveurs, les liaisons étant entièrement configurable</h3>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>Node.js</div>
                        <div>JSON</div>
                        <div>discord.js</div>
                    </div>
                    <button>En savoir plus</button>
                </article>
            </ul>
        </section>

        <section>
            <figure class="wrapper" id="study">
                <?php require $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/arrow.php' ?>
                <h2>Études</h2>
            </figure>

            <ul>
                <article>
                    <figure>
                        <img src="/assets/icons/alizon.svg" alt="alizon">
                        <figcaption>Alizon</figcaption>
                    </figure>
                    <p>Marketplace fictive pour la COBREC, proumouvant les produits bretons. Développée sous méthodologie Scrum</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>PHP</div>
                        <div>MySQL</div>
                        <div>SCSS</div>
                        <div>TypeScript</div>
                        <div>Docker</div>
                        <div>Git</div>
                        <div>C</div>
                        <div>Sockets</div>
                        <div>Scrum</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/dance.svg" alt="dance">
                        <figcaption>Ella'Danse</figcaption>
                    </figure>
                    <p>Progiciel de gestion d'emplois du temps pour des professeur d'une association de danse</h3>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>Java</div>
                        <div>JavaFX</div>
                        <div>POO</div>
                        <div>FXML</div>
                        <div>CSS</div>
                        <div>Gantt</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/snake.svg" alt="snake">
                        <figcaption>Snake</figcaption>
                    </figure>
                    <p>Jeu Snake jouable dans un terminal Linux</h3>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>C</div>
                        <div>Doxygen</div>
                        <div>Cahier de Tests</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/ai.svg" alt="ai">
                        <figcaption>Snake Autonome</figcaption>
                    </figure>
                    <p>Automatisation d’un Snake jouable dans un terminal Linux, le serpent prenant ses décisions à partir de l’analyse de l’environnement de jeu</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>C</div>
                        <div>Git</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/f1.png" alt="f1">
                        <figcaption>Formule 4 All</figcaption>
                    </figure>
                    <p>Formule 4 à l’échelle 1/4, adaptée aux PMR et aux débutants, où un Arduino gère le contrôle du véhicule et un Raspberry Pi sert d'IHM</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>Arduino</div>
                        <div>C++</div>
                        <div>Électronique</div>
                        <div>Bash</div>
                        <div>HMTL / CSS</div>
                        <div>JavaScript</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/jo.png" alt="jo">
                        <figcaption>Site Web JO - BMX Racing</figcaption>
                    </figure>
                    <p>Site Web de présentation de l'épreuve de BMX Racing aux Jeux Olypiques de Paris 2024</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>HTML / CSS</div>
                        <div>JavaScript</div>
                        <div>Figma</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/terminal.svg" alt="terminal">
                        <figcaption>Outils d’automatisation web</figcaption>
                    </figure>
                    <p>Développement d’un ensemble de scripts Bash et PHP pour industrialiser le développement d’un site web</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>PHP</div>
                        <div>Bash</div>
                        <div>Docker</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/ticket.svg" alt="ticket">
                        <figcaption>Ticketing</figcaption>
                    </figure>
                    <p>Gestion des tickets (CRUD) afin de centraliser les demandes et d’en suivre l’avancement</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>Python</div>
                        <div>SQL</div>
                        <div>Git</div>
                        <div>POO</div>
                        <div>Tests Unitaires</div>
                    </div>
                    <button>En savoir plus</button>
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/graph.svg" alt="graph">
                        <figcaption>Alogirthme de Dijkstra</figcaption>
                    </figure>
                    <p>Représentation d'algorithmes de parcours de graphes et d'apprentissage automatique</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>Python</div>
                        <div>Graphes</div>
                        <div>Machine Learning</div>
                    </div>
                    <button>En savoir plus</button>
                </article>
            </ul>
        </section>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/up.php' ?>
    </main>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/footer.php' ?>

    <script src="/scripts/up.js"></script>
    <script src="/scripts/horitical.js"></script>
    <script src="/scripts/wrapper.js"></script>
</body>

</html>