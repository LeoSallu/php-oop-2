<?php
require_once __DIR__ . '/models/Prodotti.php';
require_once __DIR__ . '/models/Categorie.php';



$lista = [$royalCanin, $almo, $almoCat, $guppy, $wilma, $filtro, $kong, $peluche];
$cane = new Categorie('Cane','<i class="fa-solid fa-dog"></i>');
$gatto = new Categorie('Gatto','<i class="fa-solid fa-cat"></i>');
$uccello = new Categorie('Uccello','<i class="fa-solid fa-dove"></i>');
$pesce = new Categorie('Pesce','<i class="fa-solid fa-fish"></i>');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="m-3">Boolshop</h1>
            <div class="col d-flex flex-wrap m-2">
                <?php foreach ($lista as $list) { ?>
                    <div class="card m-2" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $list->get_prodotti();?></h5>
                            <p class="card-text"><?php echo $list->get_animale()->get_all();?></span></p>
                            <p class="card-text"><?php echo $list->get_prezzo();?> €</p>
                            <p class="card-text"><?php echo $list->get_caratteristiche();?></p>
                            <p class="card-text"><?php echo $list->get_info();?></p>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>