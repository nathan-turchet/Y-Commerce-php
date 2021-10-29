<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | Y-Commerce</title>
    <link rel="stylesheet" href="compte.css">
    <script src="https://kit.fontawesome.com/0c87a70838.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
    crossorigin="anonymous"></script>
</head>
<body>

    <?php include('top.php'); ?>


    <div class="compte">
        <div class="connexion">
            <h1>CONNEXION</h1>
            <form action="">
                <div class="label">
                    <p class="name-label">Nom</p>
                    <input type="text" placeholder="Entrez votre nom">
                </div>
                <div class="label">
                    <p class="name-label">Prénom</p>
                    <input type="text" placeholder="Entrez votre prénom">
                </div>
                <div class="label">
                    <p class="name-label">Genre</p>
                    <select name="genre" id="genre">
                        <option selected disabled hidden value="Genre">Genre</option>
                        <option>Homme</option>
                        <option>Femme</option>
                    </select>
                </div>
                <div class="label">
                    <p class="name-label">Email</p>
                    <input type="text" placeholder="Entrez votre email">
                </div>
                <div class="label">
                    <p class="name-label">Mot de passe</p>
                    <input type="text" placeholder="Entrez un mot de passe">
                </div>
                <div class="label">
                    <p class="name-label">Confirmer le mot de passe</p>
                    <input type="text" placeholder="Confirmez votre mot de passe">
                </div>
                <div class="label">
                    <p class="name-label">Date de naissance</p>
                    <input type="date" placeholder="JJ/MM/AAAA">
                </div>
                <input type="submit">
                <div class="login">
                    <p class="name-label">Tu n'est pas encore enregistré ? <a href="">Enregistre</a> toi </p>
                </div>
            </form>
        </div>
        <div class="payement">

        </div>
    </div>

    <?php include('footer.php'); ?>
    
</body>
</html>