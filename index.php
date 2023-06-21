<?php

//Inserisco i dati
require 'db.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <style>
        nav {
            height: 5rem;
        }

        main {
            height: calc(100dvh - 5rem) !important;
        }

        main img {
            width: 12rem;
            height: 20rem;
            object-fit: contain;
        }

        main p {
            margin: 0 !important;
        }
    </style>
</head>


<body class="bg-primary text-light">
    <header>
        <h1>
            Pet-Shop
        </h1>
    </header>

    <main>
        <div class="container-fluid d-flex">
            <div class="row gap-2 rounded-4">

                <?php foreach ($products as $product) { ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">

                            <img 
                            src="<?= $product->thumb ?>" 
                            class="card-img-top" 
                            alt="..."
                            >

                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= get_class($product) ?>
                                    <span>
                                        <?= $product->category->icon ?>
                                    </span>
                                </h5>

                                <h4 class="card-text">
                                    <?= $product->name ?>
                                </h4>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <?= $product->price . '&euro;' ?>
                                </li>
                            </ul>

                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </main>

</body>

</html>