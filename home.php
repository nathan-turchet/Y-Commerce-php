<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | Y-Commerce</title>
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/0c87a70838.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
    crossorigin="anonymous"></script>
</head>
<body>

<?php
$contenu = 'Julien';
setcookie("nom_cookie", $contenu, time()+36000);
?>
    
    <?php include('top.php'); ?>

    <div class="bienvenue">
        <div class="content">
            <!-- <video id="video" autoplay src="images/logo/animation-bg.mp4"></video> -->
            <h1>DÉCOUVREZ NOS PRODUITS</h1>
            <a href="">
                Découvrir
            </a>
        </div>
    </div>

    <div id="article" class="article">
        <div id="container" class="container">


            <div class="slider">
                <a href="polo-bleu-nuit.php">
                    <div class="content">
                        <div class="content-img">
                            <img src="images/vetement/polo-bleu-nuit1-square.png">
                            <div class="hide-content">
                                <a href="polo-bleu-nuit.php">Aperçue rapide</a>
                            </div>
                            <div class="opacity"></div>
                        </div>
                        <div class="info">
                            <span>Je suis un article</span>
                            <span>10,00 €</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="slider">
                <a href="">
                    <div class="content">
                        <div class="content-img">
                            <img src="images/vetement/polo-grist1-square.png">
                            <div class="hide-content">
                                <a href="polo-bleu-nuit.html">Aperçue rapide</a>
                            </div>
                            <div class="opacity"></div>
                        </div>
                        <div class="info">
                            <span>Je suis un article</span>
                            <span>10,00 €</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="slider">
                <a href="">
                    <div class="content">
                        <div class="content-img">
                            <img src="images/vetement/t-shirt-blanc-logo1-square.png">
                            <div class="hide-content">
                                <a href="polo-bleu-nuit.html">Aperçue rapide</a>
                            </div>
                            <div class="opacity"></div>
                        </div>
                        <div class="info">
                            <span>Je suis un article</span>
                            <span>10,00 €</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="histoire">
        <div class="content">
            <h1>L'HISTOIRE DE Y-COMMERCE</h1>
            <h3>Notre histoire</h3>
            <p>Depuis le premier jour, nous mettons tout en œuvres pour étendre notre offre d'articles et améliorer l'expérience d'achat de nos clients. Nous sommes fiers d'être arrivés là où nous en sommes et restons déterminés à faire toujours mieux.</p>
            <p>Nos articles sont soigneusement sélectionnés. Nos modes de paiement et de livraison sont variés et flexibles. Consultez notre galerie d'articles et faites l'expérience de Y-Commerce. N'hésitez pas à nous contacter pour toute question, commentaire ou suggestion.</p>
        </div>
    </div>

    <div class="contact">
        <div class="content">
            <h1>CONTACTEZ-NOUS</h1>
            <form class="formulaire" action="contactez-nous.php">
                <div class="label">
                    <span>Nom *</span>
                    <input placeholder="Saisissez votre nom" type="text" name="name" required>
                </div>
                <div class="label">
                    <span>E-mail *</span>
                    <input placeholder="Saisissez votre e-mail" type="email" name="email" required>
                </div>
                <div class="label">
                    <span>Objet</span>
                    <input placeholder="Saisissez l'objet" type="text" name="object">
                </div>
                <div class="label">
                    <span>Votre message</span>
                    <div class="textarea-div">
                        <textarea placeholder="Rédigez votre message ici..." name="message" id="message" cols="30" rows="10" required></textarea>
                    </div>
                </div>
                <div class="bouton">
                    <input class="btn" type="submit">
                </div>
                <p class="echo"></p>
            </form>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <script>
        $(window).scroll(function() {
            
            var scrollPos = $(this).scrollTop() / 25;
            var st = $(window).scrollTop();
            var range = 300 
            console.log(scrollPos)


            $('.bienvenue .content').css({
                'background-size' : 100 + scrollPos + '%'
            })            
            $('.bienvenue').css("opacity", 1- st / 5000); 
        })
    </script> 
    <!-- <script>
        var vid = document.getElementById('video');
        
        vid.pause();

        window.onscroll = function(){
            vid.pause();
        };

        setInterval(function(){
            vid.currentTime = window.pageYOffset/800;
        }, 40);
    </script> -->
</body>
</html>