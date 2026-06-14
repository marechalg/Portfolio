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
    <link rel="stylesheet" href="/styles/partials/popup.css">
</head>

<body>
    <?php require_once __DIR__ . '/pages/partials/header.php'?>

    <main>
        <?php require_once __DIR__ . '/pages/partials/aside.php' ?>

        <h1>Mes Projets</h1>

        <section>
            <figure class="wrapper" id="perso">
                <?php require __DIR__ . '/pages/partials/arrow.php' ?>
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
                    <!-- <button>En savoir plus</button> -->
<!--
                    <dialog>
                        <h1>Countrydex</h1>

                        <template md>
Un bot Discord qui transforme la géographie en un jeu de collection. Les utilisateurs chassent les drapeaux en trouvant son origine et sont intégrés dans des classments de compétitivité.

### 🎯 Principe
Countrydex fait apparaître des drapeaux du monde entier dans chaque serveur. Il appartient ensuite aux membres d'identifier le drapeau et de le capturer en premier afin de construire leurs collections et de grimper dans les classements.

### ✨ Fonctionnaliés
- 🏳️ **Drapeau qui apparaît automatiquement** - Nouveau drapeau toutes les heures à :30
- 🎮 **Interfaces intéractives** - Popups et boutons intégrés à Discord pour toutes les actions
- 🏆 **Leaderboard global** - Les utilisateurs rivalisent entre eux sur le taux de complétion, la taille de la collection et la vitesse de capture
- 📊 **Statistiques** - Possibilité de traquer sa progression et bien plus avec la commande `/dex`
- 💾 **Sécurité des données** - Les données sont anonymisées, et sont sauvegardées quotidiennement

### 🛠️ Commandes
| Commande | Description |
|---------|-------------|
| `/help` | Affiche les commandes intégrées au bot |
| `/dex` | Affiche la collection et des statistiques |
| `/lb` | Affiche les classements |
| `/clear [1-99]` | Supprimer un nombre de messages (exige la permission `MANAGE_MESSAGES`) |
| `/ping` | Affiche le status du bot |
| `/reset` | Réinitialiser la progresssion (⚠️ irreversible pour le moment) |

### 🚀 Technologes
- **Backend** : Node.js
- **Frontend** : discord.js
- **Base de données** : PostgreSQL
- **Librairies** :
    - node-vibrant (extraction de couleurs)
    - moment (gestion du temps)
    - axios (requêtes API / HTTP)
    - deepl-node (traduction)
- **Hosting** : Raspberry Pi 5 (8GB)
                        </template>
                        <div></div>

                        <ul class="links">
                            <li>
                                <figure onclick="window.open('https://discord.com/oauth2/authorize?client_id=1342612831647957063&permissions=125968&integration_type=0&scope=bot+applications.commands', '_blank').focus()">
                                    <?php // require __DIR__ . '/pages/partials/discord.php' ?>
                                    <figcaption>Essayer</figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure onclick="window.open('https://github.com/marechalg/countrydex', '_blank').focus()">
                                    <?php // require __DIR__ . '/pages/partials/github.php' ?>
                                    <figcaption>Dépôt</figcaption>
                                </figure>
                            </li>
                        </ul>
                    </dialog>
-->
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/golden_jack.svg" alt="Golden Jack">
                        <figcaption>Golden Jack</figcaption>
                    </figure>
                    <p>Jeu de BlackJack proposant une approche moderne et ludique, tout en conservant un esprit de simulation</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>TypeScript</div>
                        <div>Nuxt.js</div>
                        <div>CLI</div>
                        <div>CI / CD</div>
                    </div>
                    <!-- <button>En savoir plus</button> -->
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
                    <!-- <button>En savoir plus</button> -->
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
                    <!-- <button>En savoir plus</button> -->
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
                        <div>Web Sockets</div>
                        <div>HTML / CSS</div>
                        <div>CI / CD</div>
                    </div>
                    <!-- <button>En savoir plus</button> -->
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
                    </div>
                    <!-- <button>En savoir plus</button> -->
                </article>

                <article>
                    <figure>
                        <img src="/assets/icons/alive.png" alt="alive">
                        <figcaption>Alive Bot</figcaption>
                    </figure>
                    <p>Bot Discord d'assistance évenementiel pour le BDE du département Informatique de l'IUT de Lannion</p>
                    <h3>Technologies Associées</h3>
                    <div>
                        <div>TypeScript</div>
                        <div>discord.js</div>
                        <div>CI / CD</div>
                    </div>
                    <!-- <button>En savoir plus</button> -->
                </article>
            </ul>
        </section>

        <section>
            <figure class="wrapper" id="study">
                <?php require __DIR__ . '/pages/partials/arrow.php' ?>
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
                        <div>C</div>
                        <div>Sockets</div>
                        <div>Scrum</div>
                    </div>
                    <!-- <button>En savoir plus</button> -->
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
                        <div>FXML</div>
                        <div>CSS</div>
                        <div>Gantt</div>
                    </div>
                    <!-- <button>En savoir plus</button> -->
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
                    <!-- <button>En savoir plus</button> -->
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
                    </div>
                    <!-- <button>En savoir plus</button> -->
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
                    <!-- <button>En savoir plus</button> -->
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
                    <!-- <button>En savoir plus</button> -->
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
                    <!-- <button>En savoir plus</button> -->
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
                        <div>Tests Unitaires</div>
                    </div>
                    <!-- <button>En savoir plus</button> -->
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
                    <!-- <button>En savoir plus</button> -->
                </article>
            </ul>
        </section>

        <?php require_once __DIR__ . '/pages/partials/up.php' ?>
    </main>

    <?php require_once __DIR__ . '/pages/partials/menu.php' ?>

    <?php require_once __DIR__ . '/pages/partials/footer.php' ?>

    <script src="/scripts/up.js"></script>
    <script src="/scripts/horitical.js"></script>
    <script src="/scripts/wrapper.js"></script>
    <script type="module" src="/scripts/popup.js"></script>
</body>

</html>