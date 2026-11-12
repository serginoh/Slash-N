<?php require __DIR__ . "/elements/navbar.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleFormulaire.css">
    <link rel="stylesheet" href="css/navigation.css">

</head>

    <!-- Navbar -->
   
<!-- Formulaire -->
<section class="inscriptionContainer">

    <div class="inscriptionCard">

        <div class="inscriptionEnTete">
            <span class="inscriptionLogo">&lt;?php&gt;</span>

            <p>Commence ton aventure dans le développement PHP !</p>
        </div>

        <form action="">
            <div class="inscriptionInfos">
                <label for="name">Nom complet</label>
                <input type="text" id="name" name="fullname"
                    placeholder="Nom et prénom">
            </div>

            <div class="inscriptionInfos">
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email"
                    placeholder="Email">
            </div>

            <div class="inscriptionInfos">
                <label for="niveau">Niveau en programmation</label>

                <select id="niveau" name="niveau">
                    <option value="" disabled selected>
                        Choisis ton niveau
                    </option>
                    <option value="debutant">Débutant</option>
                    <option value="intermediaire">Intermédiaire</option>
                    <option value="avance">Avancé</option>
                </select>
            </div>

            <div class="inscriptionInfos">
                <label for="motDePasse">Mot de passe</label>
                <input type="motDePasse" id="motDePasse" name="motDePasse"
                    placeholder="Mot de passe">
            </div>

            <div class="inscriptionInfos">
                <label for="confirm">Confirmer le mot de passe</label>
                <input type="motDePasse" id="confirmation"
                    name="confirmationMotDePasse"
                    placeholder="Confirmer le mot de passe">
            </div>

            <button type="submit" class="inscriptionBouton">
                Créer mon compte
            </button>

        </form>

        <div class="inscriptionConnexion">
            J'ai déjà un compte - 
            <a href="<?= $base ?>/connexion.php">Connexion</a>
        </div>

    </div>

</section>


<!-- Footer -->
<?php require __DIR__ . "/elements/footer.php"; ?>




    <script src="js/dark-mode.js"></script>
</body>
</html>