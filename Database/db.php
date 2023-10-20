<?php

$products = [];

$bone = new Toy('Osso di gomma', 'https://picsum.photos/seed/picsum/300/260', 15, 'toy', 'cane', 'gomma');

$croccantini = new Food('Croccantini', 'https://picsum.photos/seed/picsum/300/260', 30, 'food', 'cane', 1500);

$cuccia = new Kennel('Cuccia small', 'https://picsum.photos/seed/picsum/300/260', 40, 'cuccia', 'gatto', 'small');

$whiskas = new Food('Pranzetti', 'https://picsum.photos/seed/picsum/300/260', 20, 'food', 'gatto', 10 . 'x' . 80);

array_push($products, $bone, $croccantini, $cuccia, $whiskas);
