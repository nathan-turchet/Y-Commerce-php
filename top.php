<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top</title>
    <link rel="stylesheet" href="top_php.css">
    <script src="https://kit.fontawesome.com/0c87a70838.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
    crossorigin="anonymous"></script>
</head>
<body>

<div class="top">
    <a href="home.php">
        <h1>NOM STYLÉ</h1>
    </a>
    <div class="menu">
        <div class="left">
            <a class="btn" href="home.php">HOME</a>
            <a class="btn" href="abonnement.php">Abonnement</a>
            <a class="btn" href="boutique.php">Boutique</a>
            <a class="btn" href="">À propos de nous</a>
            <a class="btn" href="contact.php">Contact</a>
            <div class="dropdown-plus">
                <button class="btn drop">Plus</button>
                <div class="dropdown">
                    <a class="btn" href="equipe.php">Notre équipe</a>
                    <a class="btn" href="contact.php">Contact</a>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="login">
                <div class="dropdown-login">
                    <button>
                        <i class="fas fa-user-circle"></i>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-login-content">
                        <a class="btn" href="">Vos Abonnement</a>
                        <a class="btn" href="">Vos Commande</a>
                        <a class="btn" href="">Info de paiement</a>
                        <a class="btn" href="compte.php">Mon Compte</a>
                    </div>
                </div>
            </div>
            <div class="pannier">
                <a class="btn" href="panier.php">
                    <i class="fas fa-shopping-bag"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="dropdown-responsive">
        <button class="btn-bar burger">
            <div class="bar bar-1"></div>
            <div class="bar bar-2"></div>
        </button>
        <div class="dropdown-responsive-content">
            <a class="btn-dropdown-responsive" href="home.php">HOME</a>
            <a class="btn-dropdown-responsive" href="abonnement.php">Abonnement</a>
            <a class="btn-dropdown-responsive" href="boutique.php">Boutique</a>
            <a class="btn-dropdown-responsive" href="">À propos de nous</a>
            <a class="btn-dropdown-responsive" href="contact.php">Contact</a>
            <div class="dropdown-responsive-plus">
                <button class="btn-dropdown-responsive-dropdown-plus">Plus</button>
                <div class="dropdown-responsive-content-plus ">
                    <a class="btn-dropdown-responsive-plus" href="equipe.php">Notre équipe</a>
                    <a class="btn-dropdown-responsive-plus" href="contact.php">Contact</a>
                </div>
            </div>
            <div class="dropdown-responsive-login">
                <button class="btn-dropdown-responsive-dropdown-login">
                    <i class="fas fa-user-circle"></i>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="dropdown-login-content-responsive ">
                    <a class="btn-dropdown-responsive-login" href="">Vos Abonnement</a>
                    <a class="btn-dropdown-responsive-login" href="">Vos Commande</a>
                    <a class="btn-dropdown-responsive-login" href="">Info de paiement</a>
                    <a class="btn-dropdown-responsive-login" href="compte.php">Mon Compte</a>
                </div>
            </div>
            <a class="btn-dropdown-responsive btn-dropdown-responsive-mon-panier" href="panier.php">
              <p>Mon Panier</p>
              <i class="fas fa-shopping-bag"></i>
            </a>
        </div>
    </div>
  </div>

  <script src="top.js"></script>
</body>
</html>