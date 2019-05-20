<nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <a class="navbar-brand" href="index.php"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav cascadaUno">
            
            <li class="nav-item dropdown">
              <a class="nav-link usuario dropdown-toggle" data-toggle="dropdown" href="profile.php"> <?=$_SESSION["name"];?>  </a>
              <ul class="dropdown-menu cascadaDos">
                <li><a href="#">Editar Perfil</a></li>
                <li class="borderli"><a href="#">Configuración</a></li>
                <li><a href="login.php">Cerrar Sesión
                </a></li>
              </ul>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.php">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Search</a>
            </li>

          </ul>
        </div>
      </nav>