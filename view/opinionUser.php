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
              <h6>Califica nuestro sitio</h6>

              <p></br>Si quieres calificar nuestro sitio, completa las siguientes preguntas. Tus respuestas ayudaran a mejorar la página.</p>
              <form type="submit" action="post">
                      <div class="form-row">
            <div class="col-lg-6 info-left">
              <label for="validationTooltip04">Puntuación del Sitio</label><br>
               <input type="radio" id="5" name="radio" value="5">
               <label >5</label>
               <input type="radio" id="4" name="radio"  value="4">
               <label >4</label>
               <input type="radio" id="3" name="radio"  value="3">
               <label >3</label>
               <input type="radio" id="2" name="radio"  value="2">
               <label >2</label>
               <input type="radio" id="1" name="radio"  value="1">
               <label >1</label>
  
              <label for="validationTooltip04">Comentario (Opcional)</label>
              <textarea rows = "5" cols = "30" name = "comentario"></textarea>
            </div>
            <p>
          </div>
            <button type="button" class="btn btn-success" >Enviar Opinión</button> 
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