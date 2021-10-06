<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="assets/css/_contact.cs">
    </head>


<body class="bodyForm">
   <?php //include '_loader.php' ?>
    <?php //include '_header.php'?>

    <form>
      <h2>Contact</h2>
      <section id="formulaire">
        <form id="contactForm">
          <label for="name">Name:</br>
        <input type="text" name="name" id="name" placeholder="Frodon Sacquet" />
          </label></br>
          <label for="mail">Email:</br>
        <input type="text" name="mail" id="mail" placeholder="frodon_saquet@hacker.com" />
          </label></br>
          <label for="Objet">subject:</br>
            <select name="Objet" id="objet-select">
            <option value="">--Please choose an option--</option>
            <option value="Rem21">Je suis un [REM_21]</option>
            <option value="Alumni">Je suis un Alumni</option>
           <option value="Formateur">Je suis un Formateur</option>
           <option value="Recruteur">Je suis un Recruteur</option>
           <option value="D">D, la reponse D</option>
        </select>
          </label></br>
          <label for="Objet">message:</br>
        <textarea placeholder="Avez vous retrouvé mon Precieux?"></textarea>
        </label></br>
        <label for="button">
      <input type="submit" value="Submit" />
    </form>
        </section>
<?php include '_footer.php' ?>
<script src="script.js"></script>
</body>

</html>