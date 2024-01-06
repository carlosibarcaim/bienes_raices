<?php
    // Realizar la conexion
    include 'includes/config/database.php';
    $db = conectarDB();

    // Autenticar al usuario
    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        // Sanitizar los datos
        $email = mysqli_real_escape_string( $db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) );
        $password = mysqli_real_escape_string( $db, $_POST['password'] );

        // Validacion de los campos
        if(!$email){
            $errores[] = "El email es obligatorio o no es valido";
        }
        if(!$password){
            $errores[] = "El password es obligatorio";
        }
        if(empty($errores)){

            // Revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '$email';";
            $resultado = mysqli_query($db, $query);
        
            if($resultado->num_rows){ //num_rows ayuda a saber si hay resultados en una consulta a la base de datos
                
                // Verificar si el usuario es valido
                $usuario = mysqli_fetch_assoc($resultado);

                // Verificar si el password es correcto o no
                $auth = password_verify($password, $usuario['password']);

                if($auth){
                    
                    // El usuario está autenticado
                    session_start();

                    // Llenar el arreglo de la sesion
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('location: /admin');

                    // echo "<pre>";
                    // var_dump($_SESSION);
                    // echo "</pre>";

                } else {
                    $errores[] = "El password es incorreto";
                }

            } else {
                $errores[] = "El usuario no existe";
            }
        }
    }



    // Incluye el header
    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesion</h1>

        <?php foreach($errores as $error): ?>
            <p class="alerta error"> <?php echo $error ?> </p>

        <?php endforeach; ?>

        <form method="POST" class="formulario">
            <fieldset>
                <legend>Email y Password</legend>
                <label for="email">E-mail: </label>
                <input name="email" type="email" placeholder="Email" id="email" >
                <label for="password">Passoword: </label>
                <input name="password" type="password" placeholder="Tu password" id="password" >
            </fieldset>

            <input type="submit" value="Iniciar Sesion" class="btn btnVerde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>   
