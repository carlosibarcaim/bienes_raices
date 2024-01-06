<?php

    // Autenticacion del usuario
    require '../../includes/funciones.php';
    $auth = estaAutenticado();

    if(!$auth){
        header('location: /');
    }

    // Al momento de actualizar, validamos el id del registro con ayuda del metodo GET
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header("location: /admin");
    }

    // Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Obtener los datos de la propiedad 
    $consulta = "SELECT * FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db,$consulta);
    $propiedad = mysqli_fetch_assoc($resultado);

    // echo "<pre>";
    // var_dump($propiedad);
    // echo "</pre>";

    // Consultar para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultadoVendedor = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = [];

    // Crear variables para insertarlas
    $titulo = $propiedad['titulo'];
    $precio = $propiedad['precio'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $wc = $propiedad['wc'];
    $estacionamiento = $propiedad['estacionamiento'];
    $vendedores_Id = $propiedad['vendedores_id'];
    $propiedadImagen = $propiedad['imagen'];

    if($_SERVER["REQUEST_METHOD"] === 'POST'){

        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        // echo "<pre>";
        // var_dump($_FILES);
        // echo "</pre>";
        
        // Crear variables para insertarlas
        // mysqli_real_escape para sanitizar los registros
        $titulo = mysqli_real_escape_string($db, $_POST["titulo"]);
        $precio = mysqli_real_escape_string($db, $_POST["precio"]);
        $descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
        $habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
        $wc = mysqli_real_escape_string($db, $_POST["wc"]);
        $estacionamiento = mysqli_real_escape_string($db, $_POST["estacionamiento"]);
        $vendedores_Id = mysqli_real_escape_string($db, $_POST["vendedores_Id"]);
        $creado = date("y/m/d");
        // Asignar files hacia una variable
        $imagen = $_FILES['imagen'];

        // Revisar el name de la variable imagen
        // var_dump($imagen['name']);

        // Ejecutar codigo despues de que el usuario envia el formulario
        if(!$titulo){
            $errores[] = "Debes añadir un titulo";
        }
        if(!$precio){
            $errores[] = "El precio es obligatorio";
        }
        $medida = 1000 * 2000;
        if($imagen['size'] > $medida){
            $errores[] = "La imagen no debe de ser mayor a 2 MB";
        } 
        if(!$descripcion){
            $errores[] = "La descripcion es obligatoria";
        }
        if(!$habitaciones){
            $errores[] = "El numero de habitaciones es obligatorio";
        }
        if(!$wc){
            $errores[] = "El numero de baños es obligatorio";
        }
        if(!$estacionamiento){
            $errores[] = "El numero de estacionamientos es obligatorio";
        }
        if(!$vendedores_Id){
            $errores[] = "El vendedor es obligatorio";
        }
        
        // Validar por tamaño (100 kb maximo)
        
        if($imagen['size'] > $medida){
            $errores[] = "La imagen es muy pesada";
        }

        
        //echo "<pre>";
        //var_dump($errores);
        //echo "<pre>";

        // Revisar que el array de errores esté vacio
        if(empty($errores)){

            // SUBIDA DE ARCHIVOS
            // Crear carpeta
            $carpetaImagenes = "../../imagenes/";

            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
            }

            $nombreImagen = '';

            if($imagen['name']){
                unlink($carpetaImagenes . $propiedad['imagen']);

                    //Generar un nombre unico
                $nombreImagen = md5(uniqid(rand(),true)) . ".jpg";

                    //Subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
            } else {
                    // De lo contrario el campo $nombreImagen del query va a seguir siendo la misma imagen que había en $propiedad
                $nombreImagen = $propiedad['imagen'];
            }

                
            
                // Insertar en la base de datos
            $query = " UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}', 
            descripcion = '${descripcion}', habitaciones = ${habitaciones}, wc = ${wc}, 
            estacionamiento = ${estacionamiento}, vendedores_Id = ${vendedores_Id} WHERE id = ${id} ";

             // Siempre comprobar los querys antes de ejecutarlos   
            // echo $query;

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                // Redireccionar al inicio para evitar duplicados
                header('location: /admin?resultado=2');
            }
        }
        
    }

    

    

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Actualizar</h1>
        <div class="alinear-izquierda">
            <a href="/admin/index.php" class="boton btnVerde">Volver</a>
        </div>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>    

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion general</legend>
                
                <label for="titulo">Titulo: </label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo ?>">

                <label for="precio">Precio: </label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>">

                <label for="imagen">Imagen: </label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
                <img src="/imagenes/<?php echo $propiedadImagen; ?>" alt="" class="imagen-small">

                <label for="descripcion">Desripcion: </label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion propiedad</legend>

                <label for="habitaciones">Habitaciones: </label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones ?>">

                <label for="wc">Baños: </label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc ?>">

                <label for="estacionamiento">Estacionamientos: </label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedores_Id">
                    
                    <option value="">--Seleccione--</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultadoVendedor)): ?>
                        <option <?php echo $vendedores_Id === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"> 
                        <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?> </option>
                    <?php endwhile; ?>
                    
                </select>
            </fieldset>
            <div class="alinear-izquierda"> 
                <input type="submit" value="Actualizar Propiedad" class="boton btnVerde">
            </div>
            
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>   