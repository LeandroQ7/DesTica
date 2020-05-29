<?php
    
        include_once 'headerUser.php';          
        
  
?>

    <!-- Start about-info Area -->
      <section class="about-info-area section-gap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 info-left">
              <img class="img-fluid" src="view/img/about/info-img.jpg" alt="">
            </div>
            <div class="col-lg-6 info-right">
              <h6>Presupuesto</h6>

              <p></br>Para conocer el prosupuesto de su viaje, complete la siguiestes preguntas:</p>
              <form type="submit" action="post">
                      <div class="form-row">
            <div class="col-lg-6 info-left">
              <label for="validationTooltip04">Cantidad de personas:</label><br>
               <input type="number" id="personas">
                <label for="validationTooltip04">Numero de días:</label><br>
               <input type="number" id="dias">
               <label for="validationTooltip04">Precio por persona: </label><br>
               <input type="number" id="dias"><br>
               <label for="validationTooltip04"></label><br>
              
  
            </div>
            <p>
          </div>
            <button type="button" class="btn btn-success" >Optener Presupuesto</button> 
              </form>
              </p>
            </div>
          </div>
        </div>  
      </section>
      <!-- End about-info Area -->
		

<?php
    
        include_once 'footer.php';          
        
  
?>