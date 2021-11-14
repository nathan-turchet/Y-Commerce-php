<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre panier | Y-Commerce</title>
    <link rel="stylesheet" href="panier.css">
    <script src="https://kit.fontawesome.com/0c87a70838.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
    crossorigin="anonymous"></script>
</head>
<body>
<?php include("loader.php"); ?>
<?php include('top.php');?>

    <div class="content">
        <div class="pannier">
            <div class="article">
                <div class="abonnement">
                    <h3>Livraison gratuite avec un abonnement</h3>
                    <p>Abonnez vous <a href="abonnement.html">ici</a>. <a href="">Rejoignez-nous</a> ou <a href="">S'identifier</a>.</p>
                </div>
                <div class="pannier-vide">
                    <span>Panier</span>
                    <p>Il n'y a aucun article dans votre panier.</p>
                </div>
            </div>
            <div class="payement">
                <h2>Récapitulatif</h2>
                <div class="sous-total">
                    <p>Sous-total</p>
                    <span class="span-sous-total">0,00 €</span>
                </div>
                <div class="frais-estimer">
                    <p>Frais d'expédition</p>
                    <span class="span-frais-estimer">0,00 €</span>
                </div>
                <div class="total">
                    <p>Total</p>
                    <span>0,00 €</span>
                </div>
                <div class="payer">
                    <button></button>
                    <button></button>
                    <button></button>
                </div>
            </div>
        </div>
    </div>


<?php include('footer.php');?>

</body>
</html>