<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de producto</title>
    <link rel="stylesheet" href="Estilosp3.css">
    <script src="main.js"></script>
    
</head>

    <style>
        .boton:hover {
            background-color:orange;
        }
        .boton_perfiles {
         width:180px;
         height:30px;
         background-color:gray;
         margin:center;
        }
        .contenedor {
            height:25px;
            border-radius:8px;
            width:220px;
        }
        .form_pproductos {
            background: rgb(8, 153, 105);
            margin: auto;
            margin-top: 50px;
            width: 283px;
            height: 250px;
            padding: 30px;
            border-radius: 20px;
        }
        
    </style>
<body>
<header >
        <div class="encabezado">
            <input type="submit" class="boton_encabezado" id="IniciarSesion" value="Iniciar Sesion" onclick="IniciarSesion()" >
            <input type="submit" class="boton_encabezado" id="Registrarte" value="Registrarse" onclick="Registrarte()" >

        </div>

    </header>
    <div>
        <div class="encabezado_2">
            <img src="../imagenes/logo2.jpg"  class="logo" width="80" height="55">
            <h1 class="text">Veterinaria El Refugio</h1>
        </div>
       
    </div>

    <nav>
        <input type="submit" class="boton" id="Registrarte" value="Inicio " onclick="Admin()" >
        <input type="submit" class="boton" id="Registrarte" value="Tabla usuarios" onclick="Usuarios()" >
        <input type="submit" class="boton" id="Registrarte" value="Tabla Productos" onclick="Productos()" >
        
    </nav><br><br><br>



    <form class="form_pproductos"   method="post">
        <label for="">Nombre del producto: </label>
        <input class="contenedor"  type="text" id="nombre_p"  name='nombre_p'> <br>

        
        
        <label for="">Categoria:</label><br>
        <select class="contenedor" name="clv_categoria" id=""><br>
            <?php
            include 'conexion.php';
            $sql = "select * from categoria";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result)>0)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    echo "<option value=$row[idcategoria]> $row[descripcion] </option>";

                }
            }
            ?>
        </select>
        

        
        <br><br>
        <input class="boton_perfiles" type="submit" value="Enviar"  >
        <br><br>
        <a href="TablProductos.php">Ir a Registros</a>
        <br>
        <?php
        error_reporting(0);
        include 'conexion.php';
    
        $usuario = $_POST ['nombre_p'];
        $categoria = $_POST ['clv_categoria'];

        $sql = "INSERT INTO productos(nombre,idcategoria)
        VALUES (\"$usuario\",\"$categoria\")";

        $result = mysqli_query($conn,$sql);

        mysqli_close ($conn);

        
        ?>
        
    </form>
    
</body>
</html>