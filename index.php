<?php

$debug = true;
if ($debug == true) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}


require __DIR__ . '/Models/products.php';
require __DIR__ . '/Models/food.php';
require __DIR__ . '/Models/kennel.php';
require __DIR__ . '/Models/toy.php';

require __DIR__ . '/Database/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet's Shop</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <?php include './Layout/header.php' ?>

    <main class="pt-5">

        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) : ?>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?= $product->image ?>" alt="" class="img-fluid">
                                <h3>
                                    <?= $product->name ?>
                                </h3>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>



    </main>





    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>