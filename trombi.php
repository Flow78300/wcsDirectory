<?php include '_head.php' ?>

<body class="bodyTrombi">
  <?php include '_loader.php'?>
  <?php include '_header.php'?>


    <main class="trombi">
        <h1>Promo Blue-Mûmakil</h1>

        <section class="trombi-wrapper">
            <?php
            $handle = fopen("./assets/data.csv", "r");
            if ($handle) :
                $i = 0;
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) : ?>
                    <div class="trombi-card">
                        <img src="/assets/images/<?= $data[9] ?>" alt="">
                        <div class="trombi-card-body">
                            <h3><?= $data[1] ?> <?= $data[0] ?></h3>
                            <p>
                                <i class="ion-egg"></i>
                                <?= $data[2] ?></br>
                                <i class="ion-university"></i>
                                <?= $data[8] ?></br>
                                <i class="ion-planet"></i>
                                <?= $data[4] ?></br>
                                <i class="ion-location"></i>
                                <?= $data[3] ?></br>
                            </p>
                            <a class="btn" href="/fiche_perso.php?user=<?= $i ?>">Plus d'info</a>
                        </div>

                    </div>
                <?php ++$i;
                endwhile; ?>
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