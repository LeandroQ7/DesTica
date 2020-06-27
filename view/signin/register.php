<!-- Start about-info Area -->
      <section class="about-info-area section-gap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 info-right">
              <h1>Bienvenidos a DesTica</h1>
              <form class="form-signin" action="?register=newUser" method="post">
                <div class="text-center mb-4">
                  <img class="mb-4" src="public/img/logo.png" alt="" width="72" height="72">
                  <p>Por favor ingrese sus datos personales para crearte una nueva cuenta.</p>
                </div>

                <div class="form-label-group">
                  <input type="text" id="inputName" maxlength="10" name="inputName" class="form-control" placeholder="username" required autofocus>
                  <label for="inputName">Nombre Usuario</label>
                </div>

                <div class="form-label-group">
                  <input type="email" id="inputEmail"  name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>
                  <div class="col-md-4 mb-3">
                    <label for="inputgender">Sexo</label>
                    <select class="custom-select" name="inputgender" id="inputgender" required>
                      <option value="" disabled>Seleccione un sexo</option>
                      <option selected  value="M">Masculino</option>
                      <option value="F">Feminino</option>
                    </select>
                    <div class="invalid-tooltip">
                      Por favor seleccione una opción.
                    </div>
                   <input type="text" id="inputAge" maxlength="2" name="inputAge" class="form-control" onkeypress="return onlynumber(event)" placeholder="25" required autofocus>
                    <label for="inputAge">Edad</label>
                  </div>
                <div class="form-label-group">
                  <h3>Preferencias</h3>
                  <div class="col-md-5 mb-3">
                    <label for="inputenvironment">Ambiente Preferido</label>
                    <select class="custom-select" name="inputenvironment" id="inputenvironment" required>
                      <option value="" disabled>Seleccione un ambiente</option>
                      <option selected  value="Playa">Playa</option>
                      <option value="Montaña">Montaña</option>
                      <option value="Ciudad">Ciudad</option>
                      <option value="Historico">Historico</option>
                    </select>
                    <div class="invalid-tooltip">
                      Por favor seleccione una opción.
                    </div>
                  </div>
                  <div class="col-md-5 mb-3">
                    <label for="inputweather">Selecciones el tipo de clima</label>
                    <select class="custom-select" name="inputweather" id="inputweather" required>
                      <option value="" disabled>Seleccione un tiempo </option>
                      <option selected  value="Caluroso">Caluroso</option>
                      <option value="Humedo">Humedo</option>
                      <option value="Lluvioso">Lluvioso</option>
                    </select>
                    <div class="invalid-tooltip">
                      Por favor seleccione una opción.
                    </div>
                  </div>
                  <div class="col-md-5 mb-3">
                    <label for="inputroad_type">Condicion de vía</label>
                    <select class="custom-select" name="inputroad_type" id="inputroad_type" required>
                      <option value="" disabled>Seleccione tipo de camino </option>
                      <option selected value="Asfaltado">Asfaltado</option>
                      <option value="Lastre">Lastre</option>
                      <option value="Tierra">Tierra</option>
                    </select>
                    <div class="invalid-tooltip">
                      Por favor seleccione una opción.
                    </div>
                  </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
            </form>
            </div>
            <div class="col-lg-6 info-left">
              <img class="img-fluid" src="public/img/about/info-img.jpg" alt="">
            </div>
          </div>
        </div>  
      </section>
      <!-- End about-info Area -->
