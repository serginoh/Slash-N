<?php
// Détecte automatiquement la racine du site (fonctionne à la racine ET dans /chapitres/)
$base = (basename(dirname($_SERVER['SCRIPT_NAME'])) === 'chapitres') ? '..' : '.';
?>

<nav aria-label="Navigation principale">
    <h1>/n</h1>

    <a href="<?= $base ?>/index.php">Accueil</a>
    
    <div id="menu">
        <a href="#">Chapitres</a>

        <div id="menuChapitres">
            <a href="<?= $base ?>/chapitres/01-installer-mac_%2B_windows_%2B_linux.php">Installer Mac/Windows/Linux</a>
            <a href="<?= $base ?>/chapitres/02-variables.php">Variables</a>
            <a href="<?= $base ?>/chapitres/03-tableaux.php">Les tableaux</a>
            <a href="<?= $base ?>/chapitres/04-conditions.php">Conditions</a>
            <a href="<?= $base ?>/chapitres/05-boucles.php">Boucles</a>
            <a href="<?= $base ?>/chapitres/06-fonctions.php">Fonctions</a>
            <a href="<?= $base ?>/chapitres/07-fonctions-utilisateurs.php">Fonctions utilisateurs</a>
            <a href="<?= $base ?>/chapitres/08-require-L-include.php">Require &amp; Include</a>
            <a href="<?= $base ?>/chapitres/09-Lien_entre_HTML_et_PHP.php">Lien entre PHP et HTML</a>
            <a href="<?= $base ?>/chapitres/10-traitement-formulaires.php">Traitement formulaires</a>
            <a href="<?= $base ?>/chapitres/11-dates.php">Dates</a>
            <a href="<?= $base ?>/chapitres/12-lecture-fichiers.php">Lecture des fichiers</a>
            <a href="<?= $base ?>/chapitres/13-ecriture-fichiers.php">Écriture des fichiers</a>
            <a href="<?= $base ?>/chapitres/14-cookies.php">Les cookies</a>
            <a href="<?= $base ?>/chapitres/15-sessions.php">La session</a>
        </div>
    </div>

    <a href="<?= $base ?>/contact.php">Contact</a>
    <a href="<?= $base ?>/connexion.php">Connexion</a>
    <a href="<?= $base ?>/inscription.php">Inscription</a>

    <!-- Loupe + Input stylisés comme le switch -->
    <div class="recherche-conteneur">
        <button type="button" id="btnLoupe" aria-label="Rechercher">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <input type="search" id="rechercheChamp" placeholder="Rechercher..." hidden>
    </div>
     
    <div class="switch">
        <div class="btn">
            <i class="fa-regular fa-sun"></i>
        </div>
    </div>
</nav>

<script>
const btnLoupe = document.getElementById('btnLoupe');
const champ = document.getElementById('rechercheChamp');

btnLoupe.addEventListener('click', () => {
    champ.hidden = !champ.hidden;
    if (!champ.hidden) {
        champ.focus();
    }
});
</script>