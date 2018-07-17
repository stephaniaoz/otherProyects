<nav class="navbar navbar-default navbar-static-top navbar-dark bg-dark navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo $helpers->getUrl("inicio");?>">title</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Operaciones
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
            <a class="dropdown-item" href="<?php echo $helpers->getUrl("mensaje"); ?>"><span>Mensaje</span></a>
            <a class="dropdown-item" href="view/ruta/"><span>Ruta</span></a>
            <a class="dropdown-item" href="view/tercero1/"><span>Tercero</span></a>
            <a class="dropdown-item" href="<?php echo $helpers->getUrl("vehiculo"); ?>"><span>Vehiculo</span></a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Basicos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
            <a class="dropdown-item" href="<?php echo $helpers->getUrl("ciudad"); ?>"><span>Ciudad</span></a>
            <a class="dropdown-item" href="<?php echo $helpers->getUrl("colegio"); ?>"><span>Colegio</span></a>
            <a class="dropdown-item" href="<?php echo $helpers->getUrl("departamento"); ?>"><span>Departamento</span></a>
            <a class="dropdown-item" href="<?php echo $helpers->getUrl("pais"); ?>"><span>Pais</span></a>
            <a class="dropdown-item" href="view/tipo/"><span>Tipo</span></a>
            <a class="dropdown-item" href="<?php echo $helpers->getUrl("dispositivoGps"); ?>"><span>Dispositivo GPS</span></a>
            <!--<a class="dropdown-item" href="view/inicio/"><span>Mapa</span></a>-->
          </div>
        </li>
      </ul>
    </div>
    <ul class='nav navbar-nav navbar-right'>
      <form class="form-inline my-2 my-lg-0" action="<?php echo $helpers->getUrl("login"); ?>">
        <button class="btn btn-sm btn-outline-secondary my-2 my-sm-0" type="submit">Cerrar sesión</button>
      </form>
    </ul>
  </div><!-- /.container-fluid -->

</nav>
