<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="bodyTrombi">
    <?php
    // include '_loader.php' 
    ?>
    <?php include '_header.php' ?>

    <main class="trombi">
        <h1>Promo Blue-Mûmakil</h1>

        <section class="trombi-wrapper">
            <!-- <div class="carousel"> **ESSAI CAROUSEL2-->
            <?php
            $handle = fopen("data.csv", "r");
            if ($handle) :
                $i = 0;
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) : ?>
            <div class="trombi-card">
                <img src="https://fakeimg.pl/600x300/?text=<?=$data[0]?>" alt="">
                <div class="trombi-card-body">
                    <h3><?=$data[0]?> <?=$data[1]?></h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor repellat sapiente architecto voluptatem beatae ut numquam pariatur dolorem! Delectus amet est cum magni, dolorem voluptatibus totam similique doloremque fugit nulla.
                    </p>
                    <a class="btn" href="/fiche_perso.php?user=<?=$i?>">Plus d'info</a>
                </div>
            </div>
                <?php ++$i;endwhile; ?>
            <?php endif; ?>
            <!-- <div class="picture"><a href="fiche_perso.php">Alexandra</a></div> -->
            <!-- <div class="picture"><a href="fiche_perso.php">Romain</a></div>
            <div class="picture"><a href="fiche_perso.php">Thibaut</a></div>
            <div class="picture"><a href="fiche_perso.php">Florian</a></div>
            <div class="picture"><a href="fiche_perso.php">Delphine</a></div>
            <div class="picture"><a href="fiche_perso.php">PetitBiscuit</a></div>
            <div class="picture"><a href="fiche_perso.php">Valene</a></div>
            <div class="picture"><a href="fiche_perso.php">Geoffrey</a></div>
            <div class="picture"><a href="fiche_perso.php">Naim</a></div> -->
            <!-- </div> **ESSAI CAROUSEL2-->
        </section>

    </main>

    <!--**ESSAI CAROUSEL2**
         <script>var tz = Math.round( ( cellSize / 2 ) /
  Math.tan( ( ( Math.PI * 2 ) / numberOfCells ) / 2 ) );
// or simplified to
var tz = Math.round( ( cellSize / 2 ) /  Math.tan( Math.PI / numberOfCells ) );</script> -->

    <?php include '_footer.php' ?>
    <script src="script.js"></script>
</body>

</html>