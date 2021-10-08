<?php include '_head.php' ?>

<body>
<?php include '_header.php'?>

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
          <h2>Etudiant(e) PHP à la Wild Code School Remote</h2>
         <p>
            Age : <?php echo $data[2] ?> ans <br>
            Ville : <?php echo $data[3] ?> <br>
            Signe astrologique : <?php echo $data[4] ?> <br>
          <em>Adresse mail : <a href="mailto:<?php echo $data[5] ?>"><?php echo $data[5] ?></a></em><br>       
         </p>            
         </section> 

          <section id="Biographie professionnelle"> 
            <h2>Projet professionnel, parcours, loisirs, passions et personnalité</h2>
            <p><?php echo $data[6] ?></p>
            <h2>Liens professionnels</h2>
            <p><i class="icon ion-pound"></i>  <?php echo $data[7] ?></p>
        </section>        
      </article>      
</section>
</div>
<?php endif; ?>
  <?php ++$i;endwhile; ?>
<?php endif; ?>

<a class="favorite styled" href="/contact.php">Contactez-moi</a>
            
<?php include '_footer.php' ?>
</body>


</html>