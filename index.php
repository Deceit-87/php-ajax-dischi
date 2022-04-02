<!DOCTYPE html>
<html lang="en">

<?php

include __DIR__ . '/./db.php'

?>
<div id="app">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <title>php-ajax-dischi</title>
</head>

<body>


    <div class="header">
        <i class="fa-brands fa-spotify logo"></i>
    </div>



    <div class="album-container">
        <ul class="album-list">
            <?php
            foreach ($disc as $album) :

            ?>

                <li class="card-wrapper">
                    <figure class="card-thumb">

                        <img src="<?= $album['poster']; ?>" alt="">

                    </figure>
                    <div class="card-info">

                        <h3>
                            <?= $album['title']; ?>
                        </h3>
                        <p>
                            <?= $album['author']; ?>
                        </p>
                        <p>
                            <?= $album['year']; ?>
                        </p>

                    </div>
            </li>





            <?php


            endforeach;



            ?>
        </ul>
    </div>
    </div>


</body>

</html>