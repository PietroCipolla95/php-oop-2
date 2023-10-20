<?php

$products = [];

$bone = new Toy('Osso di gomma', 'https://picsum.photos/seed/picsum/300/260', 15, 'Toy', new AnimalCategory('cani'), 'Gomma');

$croccantini = new Food('Croccantini', 'https://picsum.photos/seed/picsum/300/260', 30, 'Food', new AnimalCategory('cani'), 1500);

$cuccia = new Kennel('Cuccia small', 'https://picsum.photos/seed/picsum/300/260', 40, 'Kennel', new AnimalCategory('gatti'), 'Small');

$whiskas = new Food('Pranzetti', 'https://picsum.photos/seed/picsum/300/260', 20, 'Food', new AnimalCategory('gatti'), 10 . 'x' . 80);

array_push($products, $bone, $croccantini, $cuccia, $whiskas);
