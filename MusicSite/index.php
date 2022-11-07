<?php
    include('php/header.php');
    include('php/footer.php');
    define("TITLE", "BLKGRYWHT | Home Page");
?>

    <title><?php echo TITLE; ?></title>
   <div id="homepage" class="item content">
       <div id="homeCarousel" class="carousel slide" data-ride="carousel">
       
           <!--indicators-->
           <ol class="carousel-indicators">
               <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#homeCarousel" data-slide-to="1"></li>
               <li data-target="#homeCarousel" data-slide-to="2"></li>
           </ol>
           
           <!--wrapper for the slides-->
           <div class="carousel-inner" role="listbox">
               <div class="item active">
                   <!-- Format: img src="photodomain/width/height-->
                   <a href="contact.php"><img src="./balloon_fest.JPG" alt="cute kitten" style="height: 100%;" class="d-block w-100"></a> <!--Images need to be the same size or the elements on the page will shift-->
                   <div class="carousel-caption">
                       <h4>Want to be Added to my Email List?</h4>
                   </div>
               </div>
               <div class="item">
                   <a href="shop.php"><img src="./cathedral.JPG" alt="cute kitten" style="height: 100%;" class="d-block w-100"></a>
                   <div class="carousel-caption">
                       <h4>New Items Available at the Shop!</h4>
                   </div>
               </div>
               <div class="item">
                   <a href="tours.php"><img src="./baltimore.JPG" alt="cute kitten" style="height: 100%;" class="d-block w-100"></a>
                   <div class="carousel-caption">
                       <h4>New Tour Dates Available! Mark your Calendar!</h4>
                   </div>
               </div>
           </div>
           
           <!--controls-->
           <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
               <span class="sr-only">Previous</span>
           </a>
           <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
               <span class="sr-only">Next</span>
           </a>
       </div>
   </div>
   
