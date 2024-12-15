<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
<section class=randomPoke>
        <article>
            <h2>Details du Pokemon : </h2>
            <p> <?php echo "Nom : ". $poke->getName() ?></p>
            <p> <?php echo "Id : ". $poke->getId() ?></p>
            <a href="/">Retour à l'accueil</a>
        </article>
    </section>
</body>
</html>