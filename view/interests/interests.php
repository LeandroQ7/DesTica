 <?php
        if($_SESSION["session"] == "User"){
           
        }else{
      echo '<script type="text/javascript">',
     'headerAdmin();',
     '</script>';

          }          
          ?>
<!-- Start about-info Area -->
<form type="submit" action="?interest=search" method="post">
  <section class="about-info-area section-gap">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 info-right">
            <h6>Quieres recibir recomendaciones de atractivos?</h6>
            <p>
              Completa la siguiente serie de preguntas, al recibir tus respuestas nuestro sistema determinara sitios turísticos que podría serle de real interés.
            </p>
          </div>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationTooltip04">Ambiente Preferido</label>
              <select class="custom-select" id="enviroment" required>
                <option value="" disabled>Seleccione un ambiente</option>
                <option selected  value="Playa">Playa</option>
                <option value="Montaña">Montaña</option>
                <option value="Montaña">Ciudad</option>
                <option value="Montaña">Historico</option>
              </select>
          
              <div class="invalid-tooltip">
                Por favor seleccione una opción.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationTooltip04">Selecciones el tipo de clima</label>
              <select class="custom-select" id="weather" required>
                <option value="" disabled>Seleccione un tiempo </option>
                <option selected  value="horas">Caluroso</option>
                <option value="dia">Humedo</option>
                <option value="Montaña">Lluvioso</option>
              </select>
              <div class="invalid-tooltip">
                Por favor seleccione una opción.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationTooltip04">Condicion de vía</label>
              <select class="custom-select" id="road_type" required>
                <option value="" disabled>Seleccione tipo de camino </option>
                <option selected value="">Asfaltado</option>
                <option value="Playa">Lastre</option>
                <option value="Playa">Tierra</option>
              </select>
              <div class="invalid-tooltip">
                Por favor seleccione una opción.
              </div>
            </div>
        
            <div class="col-md-4 mb-3">
              <label for="validationTooltip05">Cantidad de Personas</label>
                <br/>
              <select class="custom-select" id="people_range" required>
                <option value="" disabled>Seleccione el numero de personas</option>
                <option select value="pequeño">1 a 3</option>
                <option value="mediano">4 a 7</option>
                <option value="grande">Mas de 8</option>
              </select>
              <div class="invalid-tooltip">
                Por favor seleccione una opción.
              </div>
            </div>
            

       
          </div>
          <!-- End for Interest-->
               <button type="submit" class="btn btn-success" >Enviar Respuestas</button> 
        </div>
      </div> 
  </section>
</form>
<!-- End about-info Area -->