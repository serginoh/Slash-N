<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Slash N</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/styleFormulaire.css">
        <link rel="stylesheet" href="css/navigation.css">

</head>
<body>

    <!-- Navbar -->
    <?php require __DIR__ . "/elements/navbar.php"; ?>

    <!-- Formulaire -->
    <section class="inscriptionContainer">

        <div class="inscriptionCard">

            <div class="inscriptionEnTete">
                <span class="inscriptionLogo">&lt;?php&gt;</span>

                <p>Une question ? Une suggestion ? Écris-nous.</p>
            </div>

            <form action="#" method="post">
                <div class="inscriptionInfos">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom"
                        placeholder="Nom et prénom" required>
                </div>

                <div class="inscriptionInfos">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" id="email" name="email"
                        placeholder="Email" required>
                </div>

                <div class="inscriptionInfos">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5"
                        placeholder="Ton message" required></textarea>
                </div>

                <button type="submit" class="inscriptionBouton">
                    Envoyer
                </button>

            </form>

            <div class="inscriptionConnexion">
                Pas encore de compte - 
                <a href="inscription.php">Inscription</a>
            </div>

        </div>

    </section>

    <!-- Footer -->
    <?php require __DIR__ . "/elements/footer.php"; ?>

    <script src="js/dark-mode.js"></script>

</body>
</html>