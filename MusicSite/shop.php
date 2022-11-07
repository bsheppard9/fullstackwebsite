<?php
    include('php/header.php');
    include('php/footer.php');
    define("TITLE", "BLKGRYWHT | Shop");
?>
    <title><?php echo TITLE; ?></title>
   <div id="shoppage" class="item content">
<!--       <p>Add 'cart' glyphicon to top right, 'list', 'a to z', '0 - 9' and 'grid' glyphicons with accompanying views</p>-->
       <h1 style="font-family: 'Comfortaa'; text-align: center;"><strong>Shop</strong></h1><br>
       <div class="iconcontainer">
           <div class="div1">
               <div class="div2">
                   <label>T-Shirt</label>
                   <img src="./Resized%20balloon.png" width="60%" height="60%">
                   <div class="div3">
                       <button id="price" disabled>$14.99</button>
                       <button id="addToCart"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
                   </div>
               </div>
           </div>
           <div class="div1">
               <div class="div2">
                   <label>Sticker</label>
                   <img src="./Resized%20balloon.png" width="60%" height="60%">
                   <div class="div3">
                       <button id="price" disabled>$4.99</button>
                       <button id="addToCart"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
                   </div>
               </div>
           </div>
           <div class="div1">
               <div class="div2">
                   <label>Wristband</label>
                   <img src="./Resized%20balloon.png" width="60%" height="60%">
                   <div class="div3">
                       <button id="price" disabled>$6.99</button>
                       <button id="addToCart"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
                   </div>
               </div>
           </div>
       </div>
   </div>
   