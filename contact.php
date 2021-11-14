<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de contect">
    <title>Contact | Y-Commerce</title>
    <!-- CSS -->
    <link rel="stylesheet" href="contact_php.css">
    <!-- JAVASCRIPT -->
    <script src="https://kit.fontawesome.com/0c87a70838.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
    crossorigin="anonymous"></script>
</head>
<body>
<?php include("loader.php"); ?>
    <?php include('top.php'); ?>

    <div class="contain">
        <div class="content-img">
            <img src="images/logo/colis.png" alt="">
        </div>
        <div class="contact">
            <div class="content">
                <h1>CONTACTEZ-NOUS</h1>
                <form class="formulaire" action="contactez-nous.php">
                    <div class="label">
                        <span>Nom *</span>
                        <input placeholder="Saisissez votre nom" id="name" type="text" name="name" required>
                    </div>
                    <div class="label">
                        <span>E-mail *</span>
                        <input placeholder="Saisissez votre e-mail" id="email" type="email" name="email" required>
                    </div>
                    <div class="label">
                        <span>Objet</span>
                        <input placeholder="Saisissez l'objet" type="text" name="object">
                    </div>
                    <div class="label">
                        <span>Message</span>
                        <div class="textarea-div">
                            <textarea placeholder="Rédigez votre message ici..." name="message" id="message" cols="30" rows="10" required></textarea>
                        </div>
                    </div>
                    <div class="bouton">
                        <input class="btn" type="submit">
                    </div>
                </form>
            </div>
        </div>
    
    </div>

    
    

    <?php include('footer.php'); ?>

</body>
</html>