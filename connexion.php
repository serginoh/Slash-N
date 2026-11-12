<?php require __DIR__ . "/elements/navbar.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Slash N</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/styleConnexion.css">
    <link rel="stylesheet" href="css/navigation.css">
</head>
<body>

   

<!-- FORMULAIRE -->
<section class="connexionContainer">

    <div class="connexionCard">

        <div class="connexionEnTete">
            <span class="connexionLogo">&lt;?php&gt;</span>
        </div>

        <form action="#" method="post">

            <div class="connexionInfos">
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email"
                    placeholder="Email" autocomplete="email" required>
            </div>

            <div class="connexionInfos">
                <label for="motDePasse">Mot de passe</label>
                <input type="password" id="motDePasse" name="motDePasse"
                    placeholder="Mot de passe" autocomplete="current-password" required>
            </div>

            <button type="submit" class="connexionBouton">
                Connexion
            </button>

        </form>
        
        <div class="connexionInscription">
            <a href="inscription.php">INSCRIPTION</a>
        </div>
    </div>
        
</section>


<!-- Footer -->
    <footer>
        <img src="images/logo.png" alt="">
        <p>© Ce site a été développé dans un cadre d'apprentissage</p>
    </footer>



    <script src="js/chapitres-data.js"></script>
    <script src="js/recherche.js"></script>
    <script src="js/dark-mode.js"></script>
</body>
</html>