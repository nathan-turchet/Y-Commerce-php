<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre compte | Y-Commerce</title>
    <link rel="stylesheet" href="compte.css">
    <script src="https://kit.fontawesome.com/0c87a70838.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
    crossorigin="anonymous"></script>
</head>
<body>

    <?php include('top.php'); ?>


    <div class="contain">
        <div class="compte">
            <div class="content">
                <h1>CRÉE VOTRE COMPTE</h1>
                <form class="formulaire" action="create-account.php">
                    <div class="label">
                        <span>Nom *</span>
                        <input placeholder="Saisissez votre nom" type="text" name="name" required>
                    </div>
                    <div class="label">
                        <span>Prénom *</span>
                        <input placeholder="Saisissez votre prénom" type="text" name="prenom" required>
                    </div>
                    <div class="label">
                        <span>E-mail *</span>
                        <input placeholder="Saisissez votre e-mail" type="email" name="email" required>
                    </div>
                    <div class="label">
                        <span>Téléphone </span>
                        <input placeholder="+33 6 00 00 00 00" type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="label">
                        <span>Date de naissance</span>
                        <input placeholder="Saisissez votre date de naissance" type="date" name="naissance" required>
                    </div>
                    <div class="label">
                        <span>Mot de passe</span>
                        <input placeholder="Entrez un mot de passe" type="password" name="mot_de_passe" required>
                    </div>
                    <div class="label">
                        <span>Confirmez votre mot de passe</span>
                        <input placeholder="Confirmez le mot de passe" type="password" name="mot_de_passe_confirm" required>
                    </div>
                    <div class="bouton">
                        <input class="btn" type="submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="shopping">
            <div class="content">
                <h1>Votre pannier</h1>
                <div class="shopping-content">
                    <div class="vide-shopping-content">
                        <span>Il n'y a aucun article dans votre panier.</span>
                        <a href="boutique.php">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    
</body>
</html>