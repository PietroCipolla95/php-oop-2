<?php

$products = [];

$bone = new Toy('Osso di gomma', 'https://picsum.photos/seed/picsum/300/260', 15, 'Toy', 'cane', 'Gomma');

$croccantini = new Food('Croccantini', 'https://picsum.photos/seed/picsum/300/260', 30, 'Food', 'Cane', 1500);

$cuccia = new Kennel('Cuccia small', 'https://picsum.photos/seed/picsum/300/260', 40, 'Kennel', 'gatto', 'Small');

$whiskas = new Food('Pranzetti', 'https://picsum.photos/seed/picsum/300/260', 20, 'Food', 'gatto', 10 . 'x' . 80);

array_push($products, $bone, $croccantini, $cuccia, $whiskas);
