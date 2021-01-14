<?php /* Template Name: page d'accueil */ ?>

<?php get_header();?>

 
<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">


  <div class="roundedImage">
    
 <img src="<?php the_field('lesphptos') ?>" alt="image">







  <?php 
 wp_nav_menu ( array (
 'theme_location' => 'footer-menu' ,
 'menu_class' => 'my-footer-menu', 
 ) ); ?>
</div>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="container">
  <div class="row justify-content:center">
    <div class="col-3 col-md-3 col-lg-3">
    <?php the_field('titre'); ?>   
    </div>
    <div class="col-9 col-md-9 col-lg-9">
    <hr>

</div>
    </div>
  </div>
  

<?php  echo "<div class=''><br>" ?>
<?php echo "<div class='row'>"?>  
<?php echo "<div class='col-3 col-md-3'> "?> 

<?php $work = get_field( "LastWork" );?>


<?php 

echo "<img src ='".$work[0]['images']." '/>";?>
<?php echo "</div>"?> 

<?php echo "<div class='col-3 col-md-3'> "?> 




<?php 

echo "<img src ='".$work[1]['images']." '/>";?>
<?php echo "</div>"?>  


<?php echo "<div class='col-3 col-md-3'> "?> 




<?php 

echo "<img src ='".$work[2]['images']." '/>";?>
<?php echo "</div>"?>  



<?php echo "<div class='col-3 col-md-3'> "?> 




<?php 

echo "<img src ='".$work[3]['images']." '/>";?>
<?php echo "</div>"?>  

<?php  echo "<div class=''><br>" ?>

<?php echo "<div class='row'>"?>  
<?php echo "<div class='col-3 col-md-3'> "?> 

<?php $work = get_field( "LastWork" );?>


<?php 

echo "<img src ='".$work[0]['images']." '/>";?>
<?php echo "</div>"?> 

<?php echo "<div class='col-3 col-md-3'> "?> 




<?php 

echo "<img src ='".$work[1]['images']." '/>";?>
<?php echo "</div>"?>  


<?php echo "<div class='col-3 col-md-3'> "?> 




<?php 

echo "<img src ='".$work[2]['images']." '/>";?>
<?php echo "</div>"?>  



<?php echo "<div class='col-3 col-md-3'> "?> 




<?php 

echo "<img src ='".$work[3]['images']." '/>";?>
<?php echo "</div>"?>  
<?php echo "</div>"?> 
<?php echo "</div>"?>  



<div>


<div class="container">
  <div class="row justify-content:center">
    <div class="col-3">
    <?php the_field('titre'); ?>   
    </div>
    <div class="col-9">
    <hr>

</div>
    </div>
  
 
<?php  echo "<div class=''><br>" ?>
<?php echo "<div class='row'>"?>  
<?php echo "<div class='col-6 col-md-6'> "?>  
 
<?php the_field('lestext'); ?> 
<?php echo "</div>"?>  
<?php echo "  <div class='col-6 col-md-6'> "?>  
<?php the_field('lestext'); ?> 
<?php echo "</div>"?>  














<div class="container">
  <div class="row">
    <div class="col-6 col-md-6 col-lg">
    <?php the_field('lestext'); ?> 
    </div>
    <div class="col-6 col-md-6 col-lg">
    <?php the_field('lestext'); ?> 
    </div>
  </div>
</div> 


<div  style="padding-top:50px"class="container">
  <div class="row">
    <div class="col-6 col-md-6 col-lg">
    <?php the_field('lestext'); ?> 
    </div>
    <div class="col-6 col-md-6 col-lg">
    <?php the_field('lestext'); ?> 
    </div>
  </div>
</div>


<br><br>
<div class="container">
  <div class="row">
    <div class="col-6 col-md-6 col-lg">
    <?php the_field('lestext'); ?> 
    </div>
    <div class="col-6 col-md-6 col-lg">
    <?php the_field('lestext'); ?> 
    </div>
  </div>
</div>



<?php  echo "<div class=''><br>" ?>
<?php echo "<div class='d-flex justify-content-end'>"?>  
<?php echo "<div class='col-6 col-md-6'> "?>  
 
<?php the_field('lestext'); ?> 
<?php echo "</div>"?>  
<?php echo "  <div class='col-6 col-md-6'> "?>  
<?php the_field('lestext'); ?> 
<?php echo "</div>"?>  


<?php echo "</div>"?> 
<?php echo "</div>"?> 

<?php echo "</div>"?> 

<?php  echo "<div class=''><br>" ?>

<?php $value = get_field( "slideer" ); 




?>


<section  id="slider">
<!-- Slideshow container -->
<div  style="text-align:center"class="slideshow-container">
<?php

for ($i=0; $i < count($value) ; $i++) { 
    echo '<div class="mySlides fade">';
    echo '<div class="numbertext">'.($i+1).' / '.count($value).'</div>';
    echo '<img src='.$value[$i]["sliders"].' />';
    echo '<div class="text">'.$value[$i]["textese"].'</div>';
    echo ' </div>';
}
?>

  <!-- Next and previous buttons -->
  <a class="prev" style="margin-left:-50px" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<?php
for ($i=0; $i < count($value) ; $i++) { 
echo ' <span class="dot" onclick="currentSlide('.($i+1).')"></span>';
}

    ?>
 

</div>


</section>




<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<div class="container">
  <div class="row justify-content:center">
    <div class="col-3">
    <?php the_field('titre'); ?>    
    </div>
    <div class="col-9">
    <hr>

</div>
    </div>
  
    
  <div class="container-fluid">
  <div class="row">
    <div class="col-4 col-md-4 col-lg-4">
    <?php the_field('lestext'); ?> 
    </div>
    <div class="col-4 col-md-4 col-lg-4">
    <?php the_field('lestext'); ?> 
    </div>
    <div class="col-4 col-md-4 col-lg-4">
    <?php the_field('texters'); ?> 
    </div>
  </div>
</div> 


<div class="container">
  <div class="row">
    <div class="col-12">
    <?php the_field('titre'); ?> 
    </div>
  </div>
</div>  

     
<?php the_field('cite'); ?> 

<?php echo "</div>"?>  
<?php echo "<div class='col-12 col-md-12'> "?>  
<div class="col-9">
     <p style="margin-left:500px">-BLAZ Robert 2011 www.bizarobera.com.au</p> 


<?php echo "</div>"?>  


<?php echo "</div>"?> 
<?php echo "</div>"?> 

<?php echo "</div>"?> 



<?php get_footer(); ?>


