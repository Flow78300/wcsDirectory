<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche personnelle de Prénom NOM</title>
    <link rel="stylesheet" href="assets/css/_fiche_perso.css">
</head>

<body>
    <?php include '_header.php'?>
<a href="contact.php">Fiche perso</a>
<section class="partie1">
     <h1><strong>Prénom NOM</strong> </h1>
</section>

<section class="partie2">
      <article>
        <section id="Image"> 
            <img src="assets/image_profil.jpg"Picture" class="picture"/>
        </section>     
      </article>


      <article> 
        <section id="Etat civil"> 
        <p> Etudiant PHP à la Wild Code School Remote <br>
            Age <br>
            Ville <br>
            Signe astrologique <br>
            <em>adresse.mail@mail.com</em><br>       
         </p>
            
         </section>
          <section id="Biographie professionnelle"> 
          <p><strong>Projet professionnel:</strong> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, quos cupiditate?
          A, dolores accusamus hic consequuntur praesentium veniam enim saepe nobis, sed nihil culpa! Asperiores ratione 
          sint exercitationem magnam. </br> </p>
          <p><strong> Parcours:</strong>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam molestiae aliquam
          magnam mollitia perferendis amet suscipit doloremque eos maxime vel labore voluptatum eveniet tempore dicta, 
          ratione officiis similique ipsa. Velit.</br></p>               
          <p><strong>Loisirs, passions:</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Ad tempore ipsam dicta autem iusto at doloremque repudiandae, incidunt dolor unde non cupiditate 
          placeat tenetur optio corporis esse! Pariatur, deleniti dolores!</br></p>
          <p><strong>Personnalité:</strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
          Placeat dolore at similique reprehenderit ad rerum perferendis pariatur sed dolorum illum rem minus, 
          cupiditate ipsam! Aliquid vero quidem a odio at. </br></p>
          <p><strong>Liens professionnels:</strong> <ul><li>GitHub</li> </br>
                                                        <li>LinkedIn</li> </br>
                                                        <li>Portfolio</li> </br>
                                                        <li>CV</li> </br>
                                                    </ul>
          </p>
         <input class="favorite styled"
          type="button"
          value="Contactez-moi">  
        </section>
        </div>
      </article>
    </section>
    


<?php include '_footer.php' ?>
</body>

</html>