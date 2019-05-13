<?php

//Función dump sin exit (echo) 
function dump($param){
    echo "<pre>";
        var_dump($param);
    echo "</pre>";
    }

//Función dd
function dd($param){
    die(dump($param));
}


function redirect($location){ //redirige a otra pagina o programa.
    header('Location:' . $location); //el . concatena.
    exit;
}

function check(){ //checkeaba que el exista el session email (o sea, tenga algo adentro)
    return isset($_SESSION['email']); 
}

function guest(){ //checkea que la sesion NO este iniciada en el mail (o sea que no tenga nada adentro) para no poder acceder a las paginas sin estar logueado
    return !check();
}

?>