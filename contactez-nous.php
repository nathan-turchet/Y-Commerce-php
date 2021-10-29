<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nous avons bien reçu vos informations</h1>
    <p class="card-text"><b>Nom</b> : <?php echo strip_tags($_GET['name']); ?></p>
    <p class="card-text"><b>Email</b> : <?php echo strip_tags($_GET['email']); ?></p>
    <p class="card-text"><b>Objet</b> : <?php echo strip_tags($_GET['object']); ?></p>
    <p class="card-text"><b>Message</b> : <?php echo strip_tags($_GET['message']); ?></p>
    <a href="home.php">retour</a>
</body>
</html>