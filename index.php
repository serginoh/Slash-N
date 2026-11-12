<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slash-N – Apprenez le PHP, pas à pas</title>
    <meta name="description" content="Manuel PHP gratuit en ligne : 15 chapitres pour découvrir les bases du PHP, comprendre son fonctionnement et créer vos premières applications web.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navigation.css">
</head>
<body>
    <!-- Navbar -->
    <?php require __DIR__ . "/elements/navbar.php"; ?>

    <!-- Accueil -->
    <section id="ACCUEIL">
        <img src="images/Image%20fond%20accueil.jpg" alt="Background Image Accueil">

        <div id="en-tete">
            <a class="bouton-connexion" href="connexion.php">Connexion</a>
            <img src="images/logo-login.svg" alt="Image-user" id="LogoConnexionGoogle">
            <div id="logo-connexion"></div>
        </div>
        
        <div id="principal">
            <img src="assets/Logo%20WHITE%20-%20Slash%20N.png" alt="Logo Slash-n" style="width: 3em;">
            <h1>Apprenez le PHP, pas à pas.</h1>
            <h2>Manuel PHP gratuit en ligne</h2>
            <h3>Découvrez les bases du PHP, comprenez son fonctionnement et apprenez à créer vos premières applications web.</h3>
            <p class="hero-actions">
                <a class="hero-bouton hero-bouton--principal" href="chapitres/01-installer-mac_+_windows_+_linux.php">Commencer le chapitre 1</a>
                <a class="hero-bouton" href="#PARCOURS">Voir les 15 chapitres</a>
            </p>
            <div>
                <input type="email" name="email" placeholder="Email" aria-label="Adresse e-mail" autocomplete="email">
                <button>Recevoir newsletters</button>
            </div>
            <a href="https://fr.wikipedia.org/wiki/Fichier:Google_%22G%22_logo.svg#/media/Fichier:Google_Favicon_2025.svg"><img src="images/Google_Favicon_2025.svg.webp" alt="Bouton-connexion-Google"></a>
        </div>
    </section>

    <!-- Partie présentation de PHP -->
    <section id="PARTIE-PRESENTATION-PHP">
        <article class="article">
            <img src="images/Image%202%20présentation%20php.avif" alt="Illustration : qu'est-ce que PHP ?">
            <div>
                <h2>1. Qu'est-ce que PHP ?</h2>
                <p>PHP (Hypertext Preprocessor) est un langage de programmation principalement utilisé pour le développement web côté serveur. Il permet de créer des pages web dynamiques, de traiter des données et de communiquer avec des bases de données. Contrairement au HTML et au CSS, PHP permet d'exécuter une logique de programmation avant que le contenu soit envoyé au navigateur.</p>
            </div>
        </article>
        
        <article class="article">
            <div>
                <h2>2. À quoi sert PHP ?</h2>
                <p>PHP permet notamment de gérer les formulaires, les comptes utilisateurs, les sessions, les cookies et les échanges avec une base de données. Il peut également générer du contenu HTML automatiquement en fonction des actions ou des informations fournies par les visiteurs. C'est un outil particulièrement utile pour construire des sites web interactifs.</p>
            </div>
            <img src="images/Image%201%20présentation%20php.avif" alt="Illustration : à quoi sert PHP ?">
        </article>

        <article class="article">
            <img src="images/Image%203%20présentation%20php.webp" alt="Illustration : comment fonctionne PHP ?">
            <div>
                <h2>3. Comment fonctionne PHP ?</h2>
                <p>Le code PHP est exécuté directement sur le serveur web. Lorsqu'un visiteur accède à une page contenant du PHP, le serveur interprète le code et génère une réponse, généralement sous forme de HTML, qui est ensuite envoyée au navigateur. Le visiteur ne voit donc pas le code PHP lui-même, mais uniquement le résultat de son exécution.</p>
            </div>
        </article>
    </section>

    <!-- Parcours : les chapitres -->
    <section id="PARCOURS" aria-labelledby="titre-parcours" data-carrousel>
        <div class="parcours-entete">
            <div>
                <h2 id="titre-parcours">Le parcours en 15 chapitres</h2>
                <p class="parcours-intro">De l'installation de PHP jusqu'aux sessions : chaque carte mène directement au chapitre de code correspondant.</p>
            </div>
            <div class="carrousel-commandes">
                <button type="button" class="carrousel-fleche" data-carrousel-prec aria-label="Chapitres précédents" hidden>
                    <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" focusable="false"><path d="m15 5-7 7 7 7" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </button>
                <button type="button" class="carrousel-fleche" data-carrousel-suiv aria-label="Chapitres suivants" hidden>
                    <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" focusable="false"><path d="m9 5 7 7-7 7" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </button>
            </div>
        </div>

        <ul class="carrousel-piste">
            <li>
                <article class="carte-chapitre carte--demarrer">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">01</span>
                        <code>php -v</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Démarrer</span>
                            <span class="carte-sections">5 sections</span>
                        </div>
                        <h3>Installer PHP</h3>
                        <p class="carte-soustitre">Mac, Windows, Linux et Docker</p>
                        <p class="carte-desc">Comprendre le rôle de PHP face à HTML, CSS et JavaScript, puis installer un environnement local (XAMPP, MAMP, Wamp, Docker) et le vérifier.</p>
                        <a class="carte-lien" href="chapitres/01-installer-mac_+_windows_+_linux.php">Lire le chapitre<span class="sr-only"> 01 : Installer PHP</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--bases">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">02</span>
                        <code>$nom = 'Dupont';</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Bases</span>
                            <span class="carte-sections">8 sections</span>
                        </div>
                        <h3>Variables</h3>
                        <p class="carte-soustitre">Types, echo et concaténation</p>
                        <p class="carte-desc">La balise PHP, les variables et leurs types (entiers, décimaux, chaînes, booléens), l'affichage avec echo et la concaténation.</p>
                        <a class="carte-lien" href="chapitres/02-variables.php">Lire le chapitre<span class="sr-only"> 02 : Variables</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--bases">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">03</span>
                        <code>$notes = [12, 15, 18];</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Bases</span>
                            <span class="carte-sections">6 sections</span>
                        </div>
                        <h3>Les tableaux</h3>
                        <p class="carte-soustitre">Indexés, associatifs, imbriqués</p>
                        <p class="carte-desc">Stocker plusieurs valeurs dans une seule variable : tableaux indexés, associatifs et imbriqués, modification et débogage.</p>
                        <a class="carte-lien" href="chapitres/03-tableaux.php">Lire le chapitre<span class="sr-only"> 03 : Les tableaux</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--logique">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">04</span>
                        <code>if ($age &gt;= 18) { … }</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Logique</span>
                            <span class="carte-sections">11 sections</span>
                        </div>
                        <h3>Les conditions</h3>
                        <p class="carte-soustitre">if, else, switch et ternaire</p>
                        <p class="carte-desc">Faire prendre des décisions à son code : if, else, elseif, opérateurs de comparaison et logiques, switch et opérateur ternaire.</p>
                        <a class="carte-lien" href="chapitres/04-conditions.php">Lire le chapitre<span class="sr-only"> 04 : Les conditions</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--logique">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">05</span>
                        <code>foreach ($liste as $item)</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Logique</span>
                            <span class="carte-sections">10 sections</span>
                        </div>
                        <h3>Les boucles</h3>
                        <p class="carte-soustitre">while, for, foreach</p>
                        <p class="carte-desc">Répéter des instructions sans les réécrire : while, do…while, for, foreach, break, continue et boucles imbriquées.</p>
                        <a class="carte-lien" href="chapitres/05-boucles.php">Lire le chapitre<span class="sr-only"> 05 : Les boucles</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--fonctions">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">06</span>
                        <code>function addition(int $a, int $b)</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Fonctions</span>
                            <span class="carte-sections">10 sections</span>
                        </div>
                        <h3>Les fonctions</h3>
                        <p class="carte-soustitre">Paramètres, retour et portée</p>
                        <p class="carte-desc">Déclarer et appeler une fonction, paramètres par défaut, typage, valeurs de retour, portée des variables et fonctions natives.</p>
                        <a class="carte-lien" href="chapitres/06-fonctions.php">Lire le chapitre<span class="sr-only"> 06 : Les fonctions</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--fonctions">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">07</span>
                        <code>function bonjour($nom) { … }</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Fonctions</span>
                            <span class="carte-sections">6 sections</span>
                        </div>
                        <h3>Fonctions utilisateurs</h3>
                        <p class="carte-soustitre">Créer ses propres fonctions</p>
                        <p class="carte-desc">Créer ses propres fonctions pour réutiliser son code : définition, paramètres, retour, portée et typage.</p>
                        <a class="carte-lien" href="chapitres/07-fonctions-utilisateurs.php">Lire le chapitre<span class="sr-only"> 07 : Fonctions utilisateurs</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--organisation">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">08</span>
                        <code>require 'header.php';</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Organisation</span>
                            <span class="carte-sections">5 sections</span>
                        </div>
                        <h3>Require &amp; Include</h3>
                        <p class="carte-soustitre">Découper son code en fichiers</p>
                        <p class="carte-desc">Pourquoi découper son code, différences entre include, require et leurs variantes *_once, gestion des chemins et modularisation d'un site.</p>
                        <a class="carte-lien" href="chapitres/08-require-L-include.php">Lire le chapitre<span class="sr-only"> 08 : Require &amp; Include</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--web">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">09</span>
                        <code>&lt;?= $titre ?&gt;</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Web</span>
                            <span class="carte-sections">10 sections</span>
                        </div>
                        <h3>Lien entre PHP et HTML</h3>
                        <p class="carte-soustitre">Pages dynamiques et affichage sécurisé</p>
                        <p class="carte-desc">Intégrer du PHP dans du HTML : afficher des variables, utiliser conditions et boucles dans le balisage, générer des attributs et sécuriser l'affichage.</p>
                        <a class="carte-lien" href="chapitres/09-Lien_entre_HTML_et_PHP.php">Lire le chapitre<span class="sr-only"> 09 : Lien entre PHP et HTML</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--web">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">10</span>
                        <code>$_POST['email']</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Web</span>
                            <span class="carte-sections">6 sections</span>
                        </div>
                        <h3>Traitement des formulaires</h3>
                        <p class="carte-soustitre">Classe Form et sécurité</p>
                        <p class="carte-desc">Éviter de répéter le HTML des formulaires grâce à une classe Form (PHP 8), l'utiliser dans un script de traitement et respecter les règles de sécurité.</p>
                        <a class="carte-lien" href="chapitres/10-traitement-formulaires.php">Lire le chapitre<span class="sr-only"> 10 : Traitement des formulaires</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--pratique">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">11</span>
                        <code>date('d/m/Y');</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Pratique</span>
                            <span class="carte-sections">6 sections</span>
                        </div>
                        <h3>Les dates</h3>
                        <p class="carte-soustitre">date(), timestamp, mktime()</p>
                        <p class="carte-desc">Afficher la date du jour, choisir un format, manipuler les timestamps, créer une date précise et comparer deux dates.</p>
                        <a class="carte-lien" href="chapitres/11-dates.php">Lire le chapitre<span class="sr-only"> 11 : Les dates</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--fichiers">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">12</span>
                        <code>file_get_contents('a.txt');</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Fichiers</span>
                            <span class="carte-sections">5 sections</span>
                        </div>
                        <h3>Lecture des fichiers</h3>
                        <p class="carte-soustitre">file_get_contents, fopen</p>
                        <p class="carte-desc">Lire un fichier texte en une fois ou ligne par ligne, vérifier qu'il existe et adopter les bonnes pratiques.</p>
                        <a class="carte-lien" href="chapitres/12-lecture-fichiers.php">Lire le chapitre<span class="sr-only"> 12 : Lecture des fichiers</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--fichiers">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">13</span>
                        <code>file_put_contents('log.txt', $msg);</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">Fichiers</span>
                            <span class="carte-sections">8 sections</span>
                        </div>
                        <h3>Écriture des fichiers</h3>
                        <p class="carte-soustitre">file_put_contents, fopen, verrous</p>
                        <p class="carte-desc">Créer et modifier des fichiers depuis PHP : file_put_contents, fopen/fwrite, ajout en fin de fichier, verrouillage et précautions de sécurité.</p>
                        <a class="carte-lien" href="chapitres/13-ecriture-fichiers.php">Lire le chapitre<span class="sr-only"> 13 : Écriture des fichiers</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--etat">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">14</span>
                        <code>setcookie('prenom', 'Marc');</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">État</span>
                            <span class="carte-sections">10 sections</span>
                        </div>
                        <h3>Les cookies</h3>
                        <p class="carte-soustitre">setcookie et $_COOKIE</p>
                        <p class="carte-desc">Créer, lire, modifier et supprimer un cookie, régler sa durée de vie et ses options de sécurité, et comprendre la différence avec une session.</p>
                        <a class="carte-lien" href="chapitres/14-cookies.php">Lire le chapitre<span class="sr-only"> 14 : Les cookies</span></a>
                    </div>
                </article>
            </li>
            <li>
                <article class="carte-chapitre carte--etat">
                    <div class="carte-visuel" aria-hidden="true">
                        <span class="carte-numero">15</span>
                        <code>$_SESSION['user'] = $id;</code>
                    </div>
                    <div class="carte-corps">
                        <div class="carte-meta">
                            <span class="carte-tag">État</span>
                            <span class="carte-sections">5 sections</span>
                        </div>
                        <h3>Les sessions</h3>
                        <p class="carte-soustitre">Connexion et pages protégées</p>
                        <p class="carte-desc">Conserver un état côté serveur avec $_SESSION, sécuriser les sessions en PHP 8 et protéger une page par authentification.</p>
                        <a class="carte-lien" href="chapitres/15-sessions.php">Lire le chapitre<span class="sr-only"> 15 : Les sessions</span></a>
                    </div>
                </article>
            </li>
        </ul>
    </section>

    <!-- Nouveautés PHP -->
    <section id="NOUVEAUTES-PHP">
        <h2>Quoi de neuf pour PHP ?</h2>
        
        <div id="articleContainer">
            <a href="https://accesto.com/reports/php-upgrade-blockers-2026/" class="article" target="_blank" rel="noopener noreferrer">
                <img src="images/News%20article%20image%201.jpg" alt="">
                <p class="titre-article">"What stops PHP teams from upgrading?"</p>
            </a>
            
            <a href="https://php.watch/news/2026/12/php-critial-security-vulnerability-pre-annoucement" class="article" target="_blank" rel="noopener noreferrer">
                <img src="images/News%20article%20image%202.jpg" alt="">
                <p class="titre-article">"Critical vulnerability pre-announcement for all PHP versions"</p>
            </a>
            
            <a href="https://php.watch/news/2025/12/php-81-eol" class="article" target="_blank" rel="noopener noreferrer">
                <img src="images/News%20article%20image%203.jpg" alt="">
                <p class="titre-article">"PHP 8.1 reached its End-of-Life"</p>
            </a>
            
            <a href="https://cfitech.be/" class="article" target="_blank" rel="noopener noreferrer">
                <img src="images/News%20article%20image%204.jpg" alt="">
                <p class="titre-article">"Where can I learn PHP?"</p>
            </a>
        </div>
    </section>

    <!-- FAQ -->
    <section id="FAQ">
        <h2>FAQs</h2>
        <div id="questions">
            <article tabindex="0">Comment afficher une erreur lorsqu'une variable n'existe pas ?
                <div class="reponse">
                    On peut utiliser isset() pour vérifier si une variable est définie et n'est pas null.
                </div>
            </article>
           
            <article tabindex="0">Quelle est la différence entre PHP et HTML ?
                <div class="reponse">
                    HTML sert à structurer le contenu d'une page web, tandis que PHP permet de générer du contenu dynamique et d'effectuer des traitements côté serveur.
                </div>
            </article>
           
            <article tabindex="0">PHP est-il encore utilisé aujourd'hui ?
                <div class="reponse">
                    Oui. PHP reste largement utilisé dans le développement web, notamment par des plateformes comme WordPress, Drupal et de nombreux sites web.
                </div>
            </article>
           
            <article tabindex="0">Peut-on utiliser PHP avec MySQL ?
                <div class="reponse">
                    Oui. PHP peut communiquer avec une base de données MySQL pour enregistrer, récupérer, modifier et supprimer des informations.
                </div>
            </article>
           
            <article tabindex="0">Quelle est la différence entre echo et print en PHP ?
                <div class="reponse">
                    echo et print permettent tous les deux d'afficher du texte. Cependant, echo peut afficher plusieurs valeurs et ne retourne aucune valeur, tandis que print retourne toujours 1.
                </div>
            </article>
           
            <article tabindex="0">Comment concaténer deux chaînes de caractères en PHP ?
                <div class="reponse">
                    On utilise le point (.) pour assembler plusieurs chaînes de caractères.
                    <div id="reponseCode">
                        Exemple : <br> 
                        $prenom = "Jean";<br>
                        $nom = "Dupont";<br>
                        echo $prenom . " " . $nom;
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- Footer -->
    <?php require __DIR__ . "/elements/footer.php"; ?>

    <script src="js/chapitres-data.js"></script>
    <script src="js/recherche.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/dark-mode.js"></script>
</body>
</html>