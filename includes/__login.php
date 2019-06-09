<?php 

require 'controllers/Loginator.php';

?>


<main class="login">
  <div class="cajita">
    
  <?php
    if(isset($errors)):?>
    <img src="img/crash-01.svg" alt="rompiste_todo_mach@" width=40%>
  <?php endif;?>
  
    <h1>Inicio sesion!</h1>

    <?php if(isset($errors['user'])):?>
    <span class="errors"> <?=$errors['user'] ?></span>
    <?php endif;?>

    <form action="" method="POST">
      <input class="inputLogin" type="text" name="name" placeholder="Usuario" value="<?=(isset($errores['name'])) ?  "" : $loginValidator->inputUser('name');?><?=(isset($_COOKIE['name']))? $_COOKIE['name'] : ''; ?>">
      <a href="#">Olvidó su nombre de usuario?</a>
      <input class="inputLogin" type="password" name="pass" placeholder="Contraseña" 
              value="<?=(isset($_COOKIE['pass']))? $_COOKIE['pass'] : '' ;?>">          
      <a href="#">Olvidó su contraseña?</a>
      <p>Recordarme<input class="inputLogin" class="check" type="checkbox" name="remember"></p>
      <button class="submitLogin" type="submit">Enviar</button>
    </form>
  </div>
</main>