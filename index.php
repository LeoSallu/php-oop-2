<?php
require __DIR__ . '/models/Prodotti.php';
require __DIR__ . '/models/Categorie.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
</head>

<body>
    <ul>
        <?php foreach ($lista as $list) { ?>
            <li>
                <?php $list -> $prodotti ?>
                <?php $list -> $animale ?>
                <?php $list -> $prezzo ?>
                <?php $list -> $caratteristiche ?>
                <?php $list -> $info ?>
            </li>
        <?php }; ?>
    </ul>
</body>

</html>