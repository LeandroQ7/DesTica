<?php
  include_once 'header.php';          
?>
<!-- Start about-info Area -->
<form type="submit" action="post">
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
              <select class="custom-select" id="validationTooltip04" required>
                <option value="">Seleccione un ambiente</option>
                <option selected  value="Playa">Playa</option>
                <option value="Montaña">Montaña</option>
              </select>
              <div class="invalid-tooltip">
                Por favor seleccione una opción.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationTooltip04">Servicio deseado</label>
              <select class="custom-select" id="validationTooltip04" required>
                <option value="">Seleccione un servicio</option>
                <option selected  value="Playa">Hospedaje</option>
                <option value="Montaña">Comida</option>
              </select>
              <div class="invalid-tooltip">
                Por favor seleccione una opción.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationTooltip04">Cantidad de personas</label>
              <select class="custom-select" id="validationTooltip04" required>
                <option value="">Seleccione un servicio</option>
                <option selected value="Playa">Hospedaje</option>
                <option value="Montaña">Comida</option>
              </select>
              <div class="invalid-tooltip">
                Por favor seleccione una opción.
              </div>
            </div>
            <button type="button" class="btn btn-success">Enviar Respuestas</button> 
          </div>
        </div>
      </div> 
  </section>
</form>
<!-- End about-info Area -->
<?php  
  include_once 'footer.php';          
?>