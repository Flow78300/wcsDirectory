<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WCS Directory Home page</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    <?php 
    include '_loader.php' 
    ?>
    <?php include '_header.php' ?>
     <main>
         <section class="WCS-img"></section>
         <section class="presentation-text">
             <h1>Meet the Team</h1>
            <p>Ils étaient 66 dans cette quête du Graal, ils ne sont plus que 14,
                guidés par Jean-François, à la fin ils finiront tous Dev!
            </p>

            <p>L'annuaire en ligne est un outil de mise en relation entre élèves, futurs diplômés, avec divers acteurs de l'univers de la Tech.</br>
            Chacun d'entre vous est invité à mettre à jour sa fiche personnelle régulièrement.
            </p>

        </section>
        <section class="links-trombi">
            <!-- <p>Si vous voulez les découvrir <a href="trombi.php">suivez ce lien.</a></p> -->
            <button><a href="trombi.php">Découvrez les ici</a></button>
        </section>   

    </main>

    <?php include '_footer.php' ?>
    
    <script src="script.js"></script>

</body>

</html>