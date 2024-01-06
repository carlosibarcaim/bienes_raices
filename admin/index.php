<?php
    
    require '../includes/funciones.php';
    $auth = estaAutenticado();

    if(!$auth){
        header('Location: /');
    }


    //Importar la conexion
    require "../includes/config/database.php";
    $db = conectarDB();

    //Esctibir el query
    $query = "SELECT * FROM propiedades";

    //consultar la base de datos
    $consulta = mysqli_query($db, $query);

    // Muestra un mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){

            // Eliminar archivo
            $query = "SELECT imagen FROM propiedades WHERE id = ${id}";

            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);

            unlink('../imagenes/' . $propiedad['imagen']);


            // Eliminar propiedad
            $query = "DELETE FROM propiedades WHERE id = ${id}";

            $resultado = mysqli_query($db, $query);

            if($resultado){
                header('location: /admin?resultado=3');
            }

        }

    }

    //Incluye un template
    

    incluirTemplate('header');
    
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>

        <?php if($resultado == 1){ ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php } else if($resultado == 2) { ?>
            <p class="alerta exito">Anuncio actualizado</p>
        <?php } else if($resultado == 3) { ?>
            <p class="alerta exito">Anuncio eliminado con exito</p>
        <?php } ?>  


        <div class="alinear-izquierda">
            <a href="/admin/propiedades/crear.php" class="boton btnVerde">Nueva propiedad</a>
        </div>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los resultados -->
               
            <?php while($propiedad = mysqli_fetch_assoc($consulta)): ?> <!--Iteramos en cada una de los registros-->
 
                <tr>
                    <td> <?php echo $propiedad['id'] ?> </td>
                    <td> <?php echo $propiedad['titulo'] ?> </td>
                    <td> <?php echo $propiedad['nombreImagen'] ?> <img class="imagen-tabla" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="casa en la playa"></td>
                    <td> <?php echo $propiedad['precio'] ?> </td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">

                            <input type="submit" class="btnRojo-block w-100" value="Eliminar">
                        </form>
                        
                        <a class="btnAmarillo-block w-100" href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>">Actualizar</a>
                    </td>
                </tr>

            <?php endwhile; ?>   

            </tbody>
        </table>
        
    </main>

<?php 

    // Cerrar la conexion(opcional)
    mysqli_close($db);

    incluirTemplate('footer');
?> 