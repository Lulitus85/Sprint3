<?php

require 'controllers/Registrator.php';

?>


<main class="register">
    <div class="cajita-texto">
      <h1>
      One man s trash is another man s treasure
      </h1>
      <p class="texto_bienvenida">
      <strong> VINTRASH </strong> es un espacio para que tú puedas buscar y
        encontrar, u ofrecer, todo aquello que te apasiona.
        Desde comics, libros, vinilos, cassettes, posters, figuras de
        colección en su empaque original, juegos, vhs, etc.
        Pequeñas o grandes reliquias, aquellas que para algunos
        quedaron en el olvido y que, para ti, son tesoros a encontrar.

        Las reglas son simples, somos un <strong>ecommerce de “intercambio”</strong>: solicitas un producto, el oferente ingresa a tu
        perfil y revisa si hay algo de su interés y, si lo encuentra,
        intercambian productos. <br>
        <b>Pero no te desanimes!</b> Si no tienes nada que ofrecer, que
        sea de interés para tu ofertante, el puede subastártelo!
        <br>
        <b> <i> Bienvenido a VINTRASH, donde el deshecho de uno es
        el tesoro de otro. </i> </b>
      </p>
    </div>

    <div class="cajita2">
      
      <?php     
          if(count($errors) == 0){
            echo "";
          } else {echo "<img src='img/BOOM-01.svg' alt='rompiste_todo_mach@' width=30%>";}
        ?>


      <h1>Registro!</h1>
      <form class="formularioRegister" action="" method="POST" enctype="multipart/form-data">

        <input class="inputForm" type="text" name="name" placeholder="Usuario"
          value="<?=isset($errors["name"])? "" : $validator->inputUser("name");?>">
        
        <?php if(isset($errors['name'])):?>
        <span class="errors"> <?=$errors['name'] ?></span>
        <?php endif;?>

        <input class="inputForm" type="text" name="email" placeholder="Correo electrónico"
          value="<?=isset($errors["email"])? "": $validator->inputUser("email");?>">
        
        <?php if(isset($errors['email'])):?>
        <span class="errors"> <?=$errors['email'] ?></span>
        <?php endif;?>

        <input class="inputForm" type="password" name="pass" placeholder="Contraseña">
        <?php if(isset($errors['pass'])):?>
        <span class="errors"> <?=$errors['pass'] ?></span>
        <?php endif;?>

        <input class="inputForm" type="password" name="pass-ver" placeholder="Confirmar contraseña">
        <?php if(isset($errors['pass-ver'])):?>
        <span class="errors"> <?=$errors['pass-ver'] ?></span>
        <?php endif;?>

        <div class="button">
          <p>Agrega tu Avatar</p>
          <input class="avatar" type="file" name="avatar" value="" />
        </div>

        <?php if(isset($errors['avatar'])):?>
        <span class="errors errors2"> <?=$errors['avatar'] ?></span>
        <?php endif;?>

        <p class="ldob" for="DOB">Fecha de Nacimiento</p>
        <input type="date" name="dob">
        
        <?php if(isset($errors['dob'])):?>
        <span class="errors"> <?=$errors['dob'] ?></span>
        <?php endif;?>
        <br>
        <button class="submitRegister" type="submit" name="submit">Enviar</button>
      </form>
    </div>
  </main>