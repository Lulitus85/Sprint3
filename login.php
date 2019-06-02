<?php 
require 'loader.php';
if($_POST)
{

  $user = new User(null,$_POST['email'], $_POST['pass'],null, null, null);
  $errors= $validator->loginValidate($user);
  if(count($errors) == 0)
  {
     //$unNombre = $intenso->searchEmail($user->getEmail());
     $unNombre = BaseMySql::searchEmail($user->getEmail(), 'users',$pdo);
     if($unNombre === null)
     {
       $errors['email'] = "Algunos de los datos <b>no</b> son correctos";
     } else {
          if($auth->validatePass($user->getPass(), $unNombre['password']) != true) {
            $errors['email']= "Algunos de los datos <b>no</b> son correctos";
          } else {
            $auth->seteoSesion($unNombre);
              if(isset($_POST['remember'])){
                $auth->seteoCookie($unNombre);
              }

              if($auth->validarUsuario()){
                redirect('profile.php');
              } else{
                redirect('login.php');
              }
          }
     }
  }
}

?> 

<?php include_once 'includes/__head.php'; ?>

    <body>

      <!-- AQUI EMPIEZA EL NAV -->

<?php include_once 'includes/__nav.php'; ?>

      <!-- AQUI TERMINA EL NAV -->

        <main class="login">
          <div class="cajita">

          <?php
      if(isset($errors)):?>
        <img src="img/crash-01.svg" alt="rompiste_todo_mach@" width=40%> 
      <?php endif;?>
         <br>
            <h1>Inicio sesion!</h1>
       
            <form action="" method="POST">
                <input class="inputLogin" type="text" name="email" placeholder="Correo Electrónico" value="<?=isset($errors["email"])?"":inputUsuario("email");?>">
                <a href="#">Olvidó su Correo Electrónico?</a>
                
                <?php if(isset($errors['email'])):?>
                <span class="errors"> <?=$errors['email'] ?></span>
                <?php endif;?>
                
                <input class="inputLogin" type="password" name="pass" placeholder="Contraseña">
                <?php if(isset($errors['pass'])):?>
                <span class="errors"> <?=$errors['pass'] ?></span>
                <?php endif;?>


                <a href="#">Olvidó su contraseña?</a>
                <p>Recordarme<input class="inputLogin" class="check" type="checkbox" name="remember"></p>
                <button class="submitLogin" type="submit">Enviar</button>
            </form>
            </div>
        </main>

      <!-- AQUI EMPIEZA EL FOOTER -->

<?php include_once 'includes/__footer.php'; ?>

      <!-- AQUI TERMINA EL FOOTER -->

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
