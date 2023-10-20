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

<?php include './Layout/head.php' ?>

<body>

    <?php include './Layout/header.php' ?>

    <?php include './Layout/main.php' ?>

    <?php include './Layout/footer.php' ?>

    <?php include './Layout/bootstrapJS.php' ?>

</body>

</html>