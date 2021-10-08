<?php include '_head.php' ?>

<body class="bodyForm">
  <?php include '_loader.php'?>
  <?php include '_header.php'?>

  <section id="formulaire">

    <form id="contactForm">
      <h1 class="contact">Contact</h1>

      <div class="rang-form">
        <div class="demi-colonne"><label for="firstname">Prénom:</br>
            <input type="text" name="name" id="firstname" placeholder="Frodon" />
          </label></br>
        </div>
        <div class="demi-colonne"><label for="lasttname">Nom:</br>
            <input type="text" name="name" id="lastname" placeholder="Sacquet" />
          </label></br>
        </div>
      </div>

      <div class="rang-form">
        <div class="colonne">
          <label for="mail">Email:</br>
            <input type="text" name="mail" id="mail" placeholder="frodon_saquet@hacker.com" />
          </label></br>
        </div>

        <div class="rang-form">
          <div class="colonne"><label for="subject">subject:</br>
              <select name="Objet" id="subject">
                <option value="">--Please choose an option--</option>
                <option value="Rem21">Je suis un [REM_21]</option>
                <option value="Alumni">Je suis un Alumni</option>
                <option value="Formateur">Je suis un Formateur</option>
                <option value="Recruteur">Je suis un Recruteur</option>
                <option value="D">D, la reponse D</option>
              </select>
          </div>
        </div>

        <div class="rang-form">
          <div class="colonne">
            <label for="message">message:</br>
              <textarea placeholder="Avez vous retrouvé mon Precieux?"></textarea>
            </label></br>
          </div>
        </div>

        <div class="rang-form">
          <div class="colonne">
            <label for="button">
              <input type="submit" id="button" value="let's go" />
          </div>
        </div>

    </form>
  </section>
  <?php include '_footer.php' ?>
  <script src="script.js"></script>
</body>

</html>