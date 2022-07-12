<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if(isset($_POST["idusuario"]) && !empty($_POST["idusuario"])){
    include 'conexion.php';
    $clv=$_REQUEST["idusuario"];
    $sql="select  * from usuarios where idusuario =' $clv'";
    $result= mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)>0)
    {
        $sql="DELETE from usuarios where idusuario='$clv'";
        $result= mysqli_query($conn, $sql);
        header("location:TablaRegistro_users.php");
        exit();
    }
    else{
        echo "el registro no exixte";
    }
    mysqli_close($conn);
}
?>
<body>
    ¿Esta seguro de eliminar este registro?
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" hidden name="idusuario" value="<?php echo trim($_GET["id"]);?>">
        <input type="submit" value="Si">
        <a href="TablaRegistro_users.php">No</a>
    </form>
</body>
</html>