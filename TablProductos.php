<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Estilosp3.css">
    <script src="main.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 900px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 250px;
        }
        .link {
            color:red;
            size=50px;
            
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>


</head>
<body>
    <header >
        <div class="encabezado">
            <input type="submit" class="boton_encabezado" id="IniciarSesion" value="Iniciar Sesion" onclick="IniciarSesion()" >
            <input type="submit" class="boton_encabezado" id="Registrarte" value="Registrarse" onclick="Registrarte()" >
        </div>

    </header>
    <div>
        <div class="encabezado_2">
            <img src="logo2.jpg"  class="logo" width="80" height="55">
            <h1 class="text">Veterinaria El Refugio</h1>
        </div>
       
    </div>

    <nav>
    <input type="submit" class="boton" id="Registrarte" value="Inicio " onclick="Admin()" >
        <input type="submit" class="boton" id="Registrarte" value="Tabla usuarios" onclick="Usuarios()" >
        <input type="submit" class="boton" id="Registrarte" value="Tabla Productos" onclick="Productos()" >
        
    </nav><br><br><br>


    
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Registro de Productos</h2>
                        <a href="registros_productos.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Agregar Nuevo Producto</a>
                        
 
</div>


    
                    

    <?php
    include 'conexion.php';
    $sql = "select * from productos";
    $result = mysqli_query ($conn,$sql);
    echo "<br>";
    
    if (mysqli_num_rows ($result) > 0) //existen registro//
    {//bloque del if//

        echo '<table class="table table-bordered table-hover ">';
        echo "<thead class=thead-dark>";
        echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Nombre</th>";
            echo "<th>Idcategoria</th>";
            echo "<th>Acciones</th>";
        
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
        while($row = mysqli_fetch_assoc($result )){
        
        echo "<tr>";
        echo "<td>" . $row['idproducto'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['idcategoria'] . "</td>";
        echo "<td>";
        
        echo '<a class=link href="eliminarproducto.php?id='. $row['idproducto'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                          
        }
        mysqli_close($conn);
    }
    ?> 

    
    
    

    
    

</body>

</html>