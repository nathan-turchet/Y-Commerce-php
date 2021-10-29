<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | Y-Commerce</title>
    <link rel="stylesheet" href="annimation.css">
    <script src="https://kit.fontawesome.com/0c87a70838.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
    crossorigin="anonymous"></script>
</head>
<body>

    <?php include('top.php'); ?>

    <div class="bienvenue">
        <div class="content">
            <img src="images/logo/C_1.png" alt="">
            <img src="images/logo/Y_2.png" alt="">
            <img src="images/logo/Bande_noir.png" alt="">
            <!-- <h1>DECOUVREZ NOS PRODUITS</h1>
            <a href="">
                Découvrir
            </a> -->
        </div>
    </div>

    <div id="article" class="article">
        <div id="container" class="container">

            <i class="fas fa-chevron-right arrow-left arrow"></i>

            <div class="slider">
                <div class="content">
                    <div class="content-img">
                        <img src="images/vetement/polo-bleu-nuit1-square.png">
                    </div>
                    <div class="info">
                        <span>Je suis un article</span>
                        <span>10,00 €</span>
                    </div>
                </div>
            </div>

            <div class="slider">
                <div class="content">
                    <div class="content-img">
                        <img src="images/vetement/polo-bleu-nuit1-square.png">
                    </div>
                    <div class="info">
                        <span>Je suis un article</span>
                        <span>10,00 €</span>
                    </div>
                </div>
            </div>

            <div class="slider">
                <div class="content">
                    <div class="content-img">
                        <img src="images/vetement/polo-bleu-nuit1-square.png">
                    </div>
                    <div class="info">
                        <span>Je suis un article</span>
                        <span>10,00 €</span>
                    </div>
                </div>
            </div>



            <i class="fas fa-chevron-right arrow-right arrow"></i>
        </div>
    </div>





    <script>
        $(window).scroll(function() {
            
            var scrollPos = $(this).scrollTop();
            console.log(scrollPos)

            $('.bienvenue .content img:nth-child(1)').css({
                'bottom' : 130 + scrollPos / 2.4 ,
                'left' : -142 + scrollPos
            })

            $('.bienvenue .content img:nth-child(2)').css({
                'top' : 134 + scrollPos / 2.4,
                'right' : -142 + scrollPos
            })
        })
    </script>
</body>
</html>