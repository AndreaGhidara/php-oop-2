<?php 

//richiedo le classi
require __DIR__ . '/models/Category.php';
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Food.php';

//creo oggetti dalle classi
$catFood = new Food('FRISKIES', 71.58 , new Category('Cats', '&#x1f408;'));
$catFood->setThumb('https://www.purinashop.it/media/catalog/product/cache/c4218f1997800f206b38e4323d8d1cf4/0/8/08002205354607_c1l1_44171830.jpg');

$dogFood = new Food('Area Wild', 39.84 , new Category('Dogs', '&#128021;'));
$dogFood->setThumb('https://www.area-dog.it/wp-content/uploads/2020/11/area-wild-manzo-salmone-1.jpg');


//creo array con i prodotti
$products = [$catFood, $dogFood];

?>