 <?php
 if($_SESSION["session"] == "User"){
   
 }else{
  echo '<script type="text/javascript">',
  'headerAdmin();',
  '</script>';

}          
?>

<section class="destinations-area section-gap">
  <div class="container">

    <?php

    if(isset($destinyDetails)){
      foreach ($destinyDetails as $item): 
       ?>
       <div class="row d-flex justify-content-center">
        <div class="menu-content pb-40 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10"><?php echo $item[4]?></h1>
            
          </div>
        </div>
      </div>            
      <div class="row">
        <div class="col-lg-6 info-left">
          <div class="single-destinations">
            
            <div class="details">
              <h4>Información General</h4>
              
              <ul class="package-list">
                <li class="d-flex justify-content-between align-items-center">
                  <span>Duracion</span>
                  <span>1 día</span>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Actividades</span>
                  <span>Natacion, caminata.</span>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Lugar</span>
                  <span><?php echo $item[2]?></span>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <p>Descripción: <br/><?php echo $item[3]?></p>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                  <span>Precio Individual</span>
                  <a href="#" class="price-btn">$<?php echo $item[1]?></a>
                </li> 
                <form id="formName" action='?addFavorite' method='post'>

              <?php
                if($_SESSION["session"] != "User"){
                 ?>

                <li class="d-flex justify-content-between align-items-center">
                  <span>Agregar a favorito</span>
                  <input type="text" id="ID" name="ID" value="<?php echo $item[0]?>" style="display:none;">
                  <input type="checkbox" id="favorite" <?php if ($isFavorite == "Si" ) echo 'checked' ; ?> name="favorite" onchange="document.getElementById('formName').submit()"  >
                  
                </li> 
                 <?php
                  }
             
                 ?> 
                </form>                      
              </ul>
            </div>
          </div>
        </div>


        <div class="col-lg-6 info-rigth">
          <div class="single-destinations">
            <div class="details">
              <h4>Video del atractivo</h4>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/P7CFdNvPDcM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>

        <div class="col-lg-6 info-left">
          <div class="single-destinations">
            <div class="thumb">
              <h4>Ubicación del destino</h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.28008667659!2d-85.84523143569538!3d10.238979592687516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9e38a9524e6387%3A0x2839c12e9717f21!2sPlaya%20Avellana!5e0!3m2!1ses-419!2scr!4v1590725928274!5m2!1ses-419!2scr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
        <div class="col-lg-6 info-rigth">
          <div class="single-destinations">
            <div class="thumb">
              <h4>Imagen del destino</h4>
              <img class="card-img-top" src="public/img/<?php echo $item[5]?>" alt="Card image cap" width="250" height="250">
            </div>
          </div>
        </div>        
        
      </div>
      <?php

    endforeach;
  }
  ?>


</div>  <!--End container-->
</section>