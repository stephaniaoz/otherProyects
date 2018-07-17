<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">title</h1>
            <div class="account-wall">
                <img class="profile-img" src=""
                    alt="">
					<!-- El valida login es el del controlador -->
                <form class="form-signin" method="post" action="<?php echo $helper->getUrl("login","validaLogin"); ?>">
                  <input type="text" class="form-control" placeholder="Identificacion" name="identificacion" autofocus required> <!-- required-->
                  <input type="text" class="form-control" placeholder="Usuario" name="login" required> <!-- required-->
                  <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
                  <input class="btn btn-lg btn-primary btn-block" type="submit" value="Ingresar">
                  <label class="checkbox pull-left">
                      <input type="checkbox" value="remember-me">
                      Recordar usuario
                  </label>
                  <a href="#" class="pull-right need-help">Olvidé mi usuario o clave</a><span class="clearfix"></span>
                </form>
            </div>
            <!-- <a href="#" class="text-center new-account">Create an account </a> -->
        </div>
    </div>
</div>
