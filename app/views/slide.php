<!-- start home slider -->
<div class="slider-area an-1 hm-1">
      <!-- slider -->
      <div class="bend niceties preview-2">
         <div id="ensign-nivoslider" class="slides">
            <?php foreach($slideFE as $slide){
                
            ?>
            
               <img src="<?php echo BASE_URL ?>/public/admin/images/slide/<?php echo $slide['s_avatar'] ?>" alt="" title="#slider-direction-2"  />
            
            <?php } ?>
         </div>
         <!-- direction 1 -->
         <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-progress"></div>
            <div class="slider-content t-cn s-tb slider-1">
               <div class="title-container s-tb-c title-compress">
                  <!-- <h2 class="title1">minimal bags</h2>
                  <h3 class="title2" >collection</h3>
                  <h4 class="title2" >Simple is the best.</h4>-->
                  <!-- <a class="btn-title" href="<?php echo $link?>">View collection</a> -->
               </div>
            </div>
         </div>
         <!-- direction 2 -->
         <div id="slider-direction-2" class="slider-direction">
            <div class="slider-progress"></div>
            <div class="slider-content t-lfl s-tb slider-2 lft-pr">
               <div class="title-container s-tb-c">
                  <!-- <h2 class="title1">minimal bags</h2>
                  <h3 class="title2" >collection</h3>
                  <h4 class="title2" >Simple is the best.</h4>
                  <a class="btn-title" href="">View collection</a> -->
               </div>
            </div>
         </div>
      </div>
      <!-- slider end-->
   </div>
   <!-- end home slider -->