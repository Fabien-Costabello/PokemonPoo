<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/style.css">
    <title>Pokemons</title>
</head>

<body>
    <section>
        <h2>Pokemons capturés : </h2>
        <?php foreach (Pokemon::getCapturedPokemon() as $pokemon): ?>
            <article class=capturedPoke style="display:flex;align-items:center">
                <h3><?= $pokemon['name'] ?></h3>
                <form action="/" method="POST">
                    <button type="submit" name="liberer" value="<?= $pokemon['id'] ?>">Liberer</button>
                </form>
                <form action="/detail" method="POST">
                    <button type="submit" name="detail" value="<?= $pokemon['id'] ?>">Details</button>
                </form>
            </article>
        <?php endforeach ?>

    </section>
    <section class=randomPoke>
        <article>
            <h2>Pokemons sauvages : </h2>
            <h3> <?php echo $poke->getName() ?></h3>
            <form action="/" method="POST">
                <button type="submit" name="capture" value="<?= $poke->getId() ?>">Capturer</button>
                <button type="submit" name="tranquille" value="tranquille">Laisser tranquile</button>
            </form>
        </article>
    </section>
</body>

</html>