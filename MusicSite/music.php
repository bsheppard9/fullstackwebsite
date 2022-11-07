<?php
    include('php/header.php');
    include('php/footer.php');
    define("TITLE", "BLKGRYWHT | Latest Music");
?>
    <title><?php echo TITLE; ?></title>
   <div id="musicpage" class="item content">
       <h1 style="font-family: 'Comfortaa'; text-align: center;"><strong>Music</strong></h1><br>
       <div class="iconcontainer">
           <!--In each embedded video, ensure the width is 90% and the height is 100% -->
           <div class="musicicon" id="embedvid1">
               <!--<iframe width="90%" height="100%" src="https://www.youtube.com/embed/zwoVcrdmLOE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>Changing this to spotify to better accommodate streaming-->
               <iframe width="90%" height="100%" style="border-radius:12px; padding-top: 2.5%;" src="https://open.spotify.com/embed/episode/2CIR5IMlc87EWmAaVLWdLj?utm_source=generator&theme=0" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
           </div>
           <div class="musicicon" id="embedvid2">
               <!--<iframe width="90%" height="100%" src="https://www.youtube.com/embed/noq_YM0JRF8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
               <iframe width="90%" height="100%" style="border-radius:12px; padding-top: 2.5%;" src="https://open.spotify.com/embed/episode/5ZSPL44tVS4ND2EcdjVnml?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
            </div>
           <div class="musicicon" id="embedvid3">
               <!--<iframe width="90%" height="100%" src="https://www.youtube.com/embed/DtC8Trc2Fe0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
               <iframe width="90%" height="100%" style="border-radius:12px; padding-top: 2.5%;" src="https://open.spotify.com/embed/episode/76Ljpm29xP7UVxGWqCiT92?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
           </div>
       </div>
   </div>
   