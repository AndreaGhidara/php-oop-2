<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/Game.php";
require_once __DIR__ . "/models/Food.php";

$dogsCategory = new Category("dog", "fa-dog");
$catsCategory = new Category("cat", "fa-cat");
$productCategories = [$dogsCategory, $catsCategory];

$products = [
    new Product("tiragraffi", 44.99, "description Product", true, 50, "https://m.media-amazon.com/images/I/81PT8p9g8zL._AC_SX679_.jpg", $catsCategory),
    new Food("Purina One Bifensis Sterilcat", 33.91, "description Product", true, 87, "https://m.media-amazon.com/images/I/81wkkryRXgL._AC_SX522_.jpg", $catsCategory, 300),
    new Food("Purina Friskies Crocchette Cani Adulti con Manzo, Cereali e Verdure, 7 kg", 11.59, "description Product", true, 99, "https://m.media-amazon.com/images/I/91R4aUQfOBL._AC_SL1500_.jpg", $dogsCategory, 300),
    new Game("Molain - Palline giocattolo per gatti", 5.98, "description Product", true, 94, "https://m.media-amazon.com/images/I/81ef-KYs0BL._AC_SL1500_.jpg", $catsCategory, 400, "palline", "multi-color"),
    new Game("Trixie Denta Fun", 5.26, "description Product", true, 10, "https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/400/7992_pla_trixie_spieltau_grau_hs8_8.jpg", $dogsCategory, "sport", "bage"),
    new Product("tiragraffi", 44.99, "description Product", true, 50, "https://m.media-amazon.com/images/I/81PT8p9g8zL._AC_SX679_.jpg", $catsCategory),
    new Food("Purina One Bifensis Sterilcat", 33.91, "description Product", true, 87, "https://m.media-amazon.com/images/I/81wkkryRXgL._AC_SX522_.jpg", $catsCategory, 300),
    new Food("Purina Friskies Crocchette Cani Adulti con Manzo, Cereali e Verdure, 7 kg", 11.59, "description Product", true, 99, "https://m.media-amazon.com/images/I/91R4aUQfOBL._AC_SL1500_.jpg", $dogsCategory, 300),
    new Game("Molain - Palline giocattolo per gatti", 5.98, "description Product", true, 94, "https://m.media-amazon.com/images/I/81ef-KYs0BL._AC_SL1500_.jpg", $catsCategory, 400, "palline", "multi-color"),
    new Game("Trixie Denta Fun", 5.26, "description Product", true, 10, "https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/400/7992_pla_trixie_spieltau_grau_hs8_8.jpg", $dogsCategory, "sport", "bage"),
];

$products[0]->setWeight(200, "g");
$products[1]->setWeight(1);
$products[2]->setWeight(80, "g");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="bg-primary">
        <div class="container text-white py-3">
            <div class="row row-cols-3">
                <div class="col d-flex align-items-center">
                    <ul class="m-0 d-flex">
                        <li>
                            <a href="">
                                HOME
                            </a>
                        </li>
                        <li>
                            <a href="">
                                ABOUT
                            </a>
                        </li>
                        <li>
                            <a href="">
                                PRODOTTI IN SALDO
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col text-center">
                    <h2 class="m-0">Achi's Shop</h2>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <div class="boxIcon btn text-white">
                        <i class="fa-solid fa-cart-shopping fs-5"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container mt-3">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

                <?php foreach ($products as $product) { ?>

                    <?php if ($product->is_available) { ?>
                        <div class="col d-flex align-items-center justify-content-center pt-4">
                            <div class="card p-4">
                                <div class="p-3 bg-primary text-white  icon">

                                    <i class="fa-solid <?php echo $product->category->getIcon() ?>"> </i>

                                </div>
                                <div class="card-img-container">
                                    <img src="<?php echo $product->getimage() ?>" class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <!-- name -->
                                    <div class="card-title">
                                        <h5 class="text-center m-0">
                                            <?php echo $product->name ?>
                                        </h5>
                                    </div>
                                    <!-- Info Card -->
                                    <div>
                                        <p class="price p-2 bg-primary text-white fw-bold m-0">
                                            price:
                                            <?php echo $product->getPrice() ?>
                                        </p>
                                    </div>

                                    <div class="h-25 fw-semibold ">
                                        <?php if ($product instanceof Game) { ?>
                                            Color: <?= $product->getColor() ?><br>
                                            Genre: <?= $product->getGenre() ?>
                                        <?php } else if ($product instanceof Food) { ?>
                                            Calories: <?= $product->getCalories() ?><br>
                                        <?php } ?>
                                    </div>

                                    <div class="buyBtn d-flex justify-content-center p-2">
                                        <a href="#" class="btn btn-primary">
                                            Buy
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                <?php } ?>
            </div>
        </div>
    </main>


</body>

</html>