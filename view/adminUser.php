<?php    
        include_once 'headerUser.php';          
?>
    <!-- Start about-info Area -->
      <section class="about-info-area section-gap">
        <div class="container">
        
          <section class="destinations-area section-gap">
       
        <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-40 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Datos Personales</h1>
                             <form class="form-signin" action="?adminUser=update" method="post">
              

                <div class="form-label-group">
                  <label for="inputName">Nombre</label>
                  <input type="text" class="form-control" placeholder="Luis">
                  <label for="inputName">Apellido</label>
                  <input type="text" class="form-control" placeholder="Mora">
                  <label for="inputName">Correo</label>
                  <input type="text" class="form-control" placeholder="l_mora@gmail.com">
                

                </div>
                 <label for="inputName"></label>
                <button class="btn btn-lg btn-primary btn-block" type="button">Actualizar Datos</button>
          
                        </div>
                    </div>
                </div>            
          <div class="row">
    
           
          
     
                                                                   
          </div>
        </div>  
         </form>
      </section>
        </div>  

      </section>
      <!-- End about-info Area -->
<?php
  include_once 'footer.php';          
?>