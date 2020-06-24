<!-- Start about-info Area -->
      <section class="about-info-area section-gap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 info-right">
              <h1>Bienvenidos a DesTica</h1>
         
              <form class="form-signin" action="?login=verify" method="post">
                <img class="mb-4" src="public/img/logo.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Por favor inicie sesión</h1>
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address=admin@gmail.com" required autofocus>
                <label for="inputPassword" class="sr-only">Contraseña</label>
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password=admin" required>
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Recordarme la contraseña
                  </label>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
                </div>

                    <div>
                                    <?php

                                          if(isset($user)){
                                            if($user=="credentialError"){
                                                          echo "Usuario no registrado";
                                            }
                                        }
                                    ?>
                                </div>
                             

            </form>
            </div>
            <div class="col-lg-6 info-left">
              <img class="img-fluid" src="public/img/about/info-img.jpg" alt="">
            </div>
          </div>
        </div>  
      </section>
      <!-- End about-info Area -->