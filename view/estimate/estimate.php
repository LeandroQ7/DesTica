 <?php
        if($_SESSION["session"] == "User"){
           
        }else{
      echo '<script type="text/javascript">',
     'headerAdmin();',
     '</script>';

          }          
          ?>

<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 info-left">
          <img class="img-fluid" src="public/img/about/info-img.jpg" alt="">
        </div>
        <div class="col-lg-6 info-right">
          <h6>Presupuesto</h6>
          <p></br>Para conocer el prosupuesto de su viaje, complete la siguiestes preguntas:</p>
          <form class="form" action="?estimate=getEstimate" method="post">
            <div class="form-row">
              <div class="col-lg-7 info-left">
                <label for="personas">Cantidad de personas:</label><br>
                <input type="number" id="personas" name="personas" onkeypress="return onlynumber(event)" placeholder="1" class="form-control">
                <label for="dias">Numero de días:</label><br>
                <input type="number" id="dias" name="dias" onkeypress="return onlynumber(event)" placeholder="1" class="form-control">
                <label for="precio">Precio por persona: </label><br>
                <input type="number" id="precio" name="precio" onkeypress="return onlynumber(event)" placeholder="10000" class="form-control"><br>
              </div>
            </div>
            <p></p>
            <button id="btnopinion" class="btn btn-success" type="submit">Obtener Presupuesto</button>
          </form>
          <div class="alert alert-warning" role="alert">
            <?php if($msg!=null){echo $msg;} ?>
          </div>
        </div>
    </div>  
  </div>
</section>
<!-- End about-info Area -->