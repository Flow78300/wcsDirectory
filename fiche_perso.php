<?php include '_head.php' ?>

<body>
<?php include '_header.php'?>
<a href="contact.php">Fiche perso</a>

<?php $user = $_GET['user']; ?>

<?php
$handle = fopen("./assets/data.csv", "r");
if ($handle) :
$i = 0;
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) : 
if ($user == $i): ?>

<div class="box">
<section class="partie1">      
        <section id="Image"> 
            <img src="/assets/images/<?php echo $data[9] ?>" class="photo"/>               
        </section>   

<aside>        
  <section class="identite">
    <p><span><?php echo $data[1] ?> <?php echo $data[0] ?></span><p> 
  </section> 
</aside>


<section class="partie2">        
<article> 
        <section id="Etat civil"> 
         <p><span>Etudiant PHP à la Wild Code School Remote</span> <br>
            Age: <?php echo $data[2] ?> ans <br>
            Ville: <?php echo $data[3] ?> <br>
            Signe astrologique: <?php echo $data[4] ?> <br>
          <em>Adresse mail: <?php echo $data[5] ?></em><br>       
         </p>            
         </section> 

          <section id="Biographie professionnelle"> 
          <p><span style="color:rgba(0, 174, 255, 0.61)">Projet professionnel, parcours, loisirs, passions et personnalité:</span><?php echo $data[6] ?></p>
       
          <p><span style="color:rgba(0, 174, 255, 0.61)">Liens professionnels:</span><img src="assets/icon_livre.png" class="photo"/> <?php echo $data[7] ?></br>
                                                                
          </p>
        
        </section>        
      </article>      
</section>
</div>
<?php endif; ?>
  <?php ++$i;endwhile; ?>
<?php endif; ?>






 <input class="favorite styled"
          type="button"
          value="Contactez-moi">
            


<?php include '_footer.php' ?>
</body>


</html>