<?php

$products = [];

array_push(
    $products,

    $bone = new Toy('Osso di gomma', 'https://img.fruugo.com/product/8/92/923377928_max.jpg', 15, 'Toy', new AnimalCategory('cani'), 'Gomma'),

    $croccantini = new Food('Croccantini', 'https://m.media-amazon.com/images/I/81UsafOlWsL.jpg', 30, 'Food', new AnimalCategory('cani'), 1500),

    $cuccia = new Kennel('Cuccia small', 'https://www.ibs.it/images/8056644055090_0_0_536_0_75.jpg', 40, 'Kennel', new AnimalCategory('gatti'), 'Small'),

    $pranzetti = new Food('Pranzetti', 'https://croci.net/wp-content/uploads/2020/09/Cibo_umido_gatto_gelatina.jpg', 20, 'Food', new AnimalCategory('gatti'), 10 . 'x' . 80),

    $bone_2 = new Toy('Osso di gomma 2', 'https://croci.net/wp-content/uploads/2021/12/OSSO_BLUE.jpg', 18, 'Toy', new AnimalCategory('cani'), 'Gomma'),

    $croccantini_2 = new Food('Croccantini 2', 'https://www.petsplanet.it/713-large_default/green-for-dog-crocchette-per-tutti-i-cani-4-kg.jpg', 45, 'Food', new AnimalCategory('cani'), 2000),

    $cuccia_grande = new Kennel('Cuccia grande', 'https://www.original-legno.it/public/foto-NORMALE/000101-1.jpg', 100, 'Kennel', new AnimalCategory('cani'), 'Big'),

    $tiragraffi = new Toy('Tiragraffi', 'https://www.ibs.it/images/0602561144836_0_0_536_0_75.jpg', 120, 'Toy', new AnimalCategory('gatti'), 'Sisal'),


);
