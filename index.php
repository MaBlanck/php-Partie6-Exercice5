<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 Partie 6</title>
</head>

<body>
    <h1>Exercice 5 Partie 6</h1>
    <?php
    if (!isset($_GET['week'])) : ?>
        <p>Veuillez renseigner votre semaine de réservation</p>
    <?php endif ?>
    <?php if (isset($_GET['week'])) : ?>
        <p>Votre semaine de réservation est la <?= ($_GET['week'])  ?>;</p>
    <?php endif; ?>
    <a href="index.php?week=12">Actualiser</a>
</body>

</html>