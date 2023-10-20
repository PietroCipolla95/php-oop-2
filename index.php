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
require __DIR__ . '/Models/animal_category.php';

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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <?php include './Layout/header.php' ?>

    <main class="pt-5">

        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) : ?>
                    <div class="col-3">
                        <!-- card -->
                        <div class="card border-0">
                            <!-- card header -->
                            <div class="card-header bg-light">
                                <!-- product image -->
                                <img src="<?= $product->image ?>" alt="" class="img-fluid rounded py-2">
                                <!-- product name and category -->
                                <div class="py-3">
                                    <a href="#" class="text-black link-underline-info">
                                        <h4>
                                            <?= $product->name ?>
                                        </h4>
                                    </a>
                                    <a href="#">
                                        <p class="text-end text-black m-0 text-decoration-underline">
                                            <?= $product->category ?>
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body bg-dark d-flex justify-content-between">
                                <!-- price and details -->
                                <div id="infos_left" class="pb-5">
                                    <h6 class="text-success">
                                        <?= $product->price ?>€
                                    </h6>
                                    <h6 class="text-light">
                                        <?= $product->getInfos() ?>
                                    </h6>
                                </div>
                                <!-- animal category -->
                                <div id="infos_right" class="text-info align-self-end pb-1">
                                    <?= $product->animal->getIcon() ?>
                                </div>
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