<?php
require 'loader.php';

if(guest()) {
  redirect('login.php');
}
$user = $_SESSION['email'];

?>

<?php include_once 'includes/__head.php'; ?>

<body>
  <!-- AQUI EMPIEZA EL NAV -->

  <?php if (count($_SESSION) != 0)
{
    include 'includes/__nav_logged.php';
} else {
    include 'includes/__nav.php';
}
 ?>

  <!-- AQUI TERMINA EL NAV -->

  <!--CUERPO DE BIENVENIDA-->

  <div class="contenedorPerfil">

    <div class="card">

      <div class="imagen">
        <img class="card-img-top" src="imagenesUsuarios/<?= $_SESSION["avatar"];?>" alt="foto usuario">

  <!--aca embebo la foto de perfil del usuario en la carta-->
        </div>

      <div class="card-body">
        <p class="card-text"><?=$_SESSION["name"];?></p>
      </div>

    </div>
  </div>
  <br>
  <br>
  <br>

  <!--FIN CUERPO BIENVENIDA-->
  <div class="caja-productos">

    <section class="productos-perfil">

      <article class="producto-individual">
        <div class="producto">
          <img class="imagen-producto" src="imagenesUsuarios/Productos/music.jpg" alt="imagen de producto">
        </div>
        <div class="boton">
          <a href="#"><img class="solicitar" src="img/solicitar_-01.svg" alt="solicitar"></a>
        </div>
        <div class="info">
          <h4 class="nombre-categoria">Lectura </h4>
          <h5 class="nombre-subcategoria">Subcategoria: Comics</h5>
          <h5 class="nombre-producto">Producto: Superman N°1</h5>
          <a href="#" id="abrir">
            <h5 class="ver-fotos">VER FOTOS</h5>
          </a>
        </div>
      </article>

     
      <div id="miModal" class="modalito">
          <div id="flex" class="flex">
            <div class="contenido_modal">
                <span id="close" class="close"></span>
<!--                 acá va un carrousel con las fotos del producto -->
                <img src="imagenesUsuarios/Productos/music.jpg" alt="">
            </div>
          </div>
      </div>     
    
    </section>

  </div>


  </div>
  <!-- AQUI EMPIEZA EL FOOTER -->

  <?php include_once 'includes/__footer.php'; ?>

  <!-- AQUI TERMINA EL FOOTER -->
  <script src="modal.js" ></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

</body>

</html>