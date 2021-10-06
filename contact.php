<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="assets/css/style.cs">
    </head>


<body class="bodyForm">
    <?php include '_loader.php' ?>
    <?php include '_header.php'?>

    <form>
      <h2>Contact</h2>
      <div class="formulaire">
        <input type="Nom Prenom" placeholder="Frodon Sacquet" />
        <input type="@mail" placeholder="frodon_saquet@hacker.com" />
        <input type="Objet" placeholder="Super Quête" />
        <textarea placeholder="Avez vous retrouvé mon Precieux?"></textarea>
      </div>
      <input type="submit" value="Submit" />
    </form>

<?php include '_footer.php' ?>
<script src="script.js"></script>
</body>

</html>