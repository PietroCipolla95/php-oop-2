<?php

$products = [];

$bone = new Toy('Osso di gomma', 'https://img.fruugo.com/product/8/92/923377928_max.jpg', 15, 'Toy', new AnimalCategory('cani'), 'Gomma');

$croccantini = new Food('Croccantini', 'https://m.media-amazon.com/images/I/81UsafOlWsL.jpg', 30, 'Food', new AnimalCategory('cani'), 1500);

$cuccia = new Kennel('Cuccia small', 'https://www.ibs.it/images/8056644055090_0_0_536_0_75.jpg', 40, 'Kennel', new AnimalCategory('gatti'), 'Small');

$pranzetti = new Food('Pranzetti', 'https://croci.net/wp-content/uploads/2020/09/Cibo_umido_gatto_gelatina.jpg', 20, 'Food', new AnimalCategory('gatti'), 10 . 'x' . 80);

array_push($products, $bone, $croccantini, $cuccia, $pranzetti);
