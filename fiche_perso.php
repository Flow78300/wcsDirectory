<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche personnelle de Prénom NOM</title>
    <link rel="stylesheet" href="assets/css/fichier_perso.css">
</head>

<body>
<?php include '_header.php'?>
<a href="contact.php">Fiche perso</a>

<div class="box">
<section class="partie1">      
        <section id="Image"> 
            <img src="assets/icon_profil.png" class="photo"/>               
        </section>   

<aside>        
  <section class="identité">
    <p><span>Prénom NOM</span><p> 
  </section> 
</aside>


<section class="partie2">        
<article> 
        <section id="Etat civil"> 
         <p><span>Etudiant PHP à la Wild Code School Remote</span> <br>
            Age <br>
            Ville <br>
            Signe astrologique <br>
          <em>adresse.mail@mail.com</em><br>       
         </p>            
         </section> 

          <section id="Biographie professionnelle"> 
          <p><span style="color:rgba(0, 174, 255, 0.61)">Projet professionnel:</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, quos cupiditate?
          A, dolores accusamus hic consequuntur praesentium veniam enim saepe nobis, sed nihil culpa! Asperiores ratione 
          sint exercitationem magnam.</br></p>
          <p><span style="color:rgba(0, 174, 255, 0.61)">Parcours:</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam molestiae aliquam
          magnam mollitia perferendis amet suscipit doloremque eos maxime vel labore voluptatum eveniet tempore dicta, 
          ratione officiis similique ipsa. Velit.</br></p>               
          <p><span style="color:rgba(0, 174, 255, 0.61)">Loisirs, passions:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Ad tempore ipsam dicta autem iusto at doloremque repudiandae, incidunt dolor unde non cupiditate 
          placeat tenetur optio corporis esse! Pariatur, deleniti dolores!</br></p>
          <p><span style="color:rgba(0, 174, 255, 0.61)">Personnalité:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
          Placeat dolore at similique reprehenderit ad rerum perferendis pariatur sed dolorum illum rem minus, 
          cupiditate ipsam! Aliquid vero quidem a odio at.</br></p>
          <p><span style="color:rgba(0, 174, 255, 0.61)">Liens professionnels:</span> <ul><li><img src="assets/icon_github.png" class="logo"/> GitHub</li></br>
                                                                <li><img src="assets/logo_linkedin.png" class="logo"/> LinkedIn</li></br>
                                                                <li><img src="assets/icon_livre.png" class="logo"/>Portfolio</li></br>
                                                                <li><img src="assets/logo_cv.png" class="logo"/>CV</li></br>
                                                            </ul>
          </p>
        
        </section>        
      </article>      
</section>
</div>







 <input class="favorite styled"
          type="button"
          value="Contactez-moi">
            


<?php include '_footer.php' ?>
</body>


</html>