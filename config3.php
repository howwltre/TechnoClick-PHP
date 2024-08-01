<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$cambiar_contrasena =$_POST["cambiar_contrasena"];
$usuario=$_POST["usuario"]; 

    try{

$base=new PDO('mysql:host=localhost; dbname=BasededatosTC', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //METODO CON DOS PARAMETROS PREDE PARA LOS ERRORES 
//(HAY UN MONTON D EPARAMETROS PREDE EN PHP.NET)

$base->exec("SET CHARACTER SET utf8");

$sql="UPDATE usuario SET CONTRASENA='$cambiar_contrasena' WHERE USUARIO=:usuario"; 

$resultado1=$base->prepare($sql); 

$resultado1->execute(array(":usuario"=>$usuario));

$resultado1->closeCursor(); 

$registro1=$resultado1->fetch(PDO::FETCH_ASSOC); 

$numero_registro=$resultado1->rowCount();


    header("location: Pagina-Inicio-Sesion/login.php"); 


}catch(Exception $e){ //exeption es un objeto. que tine sus propidedades y sus contras

  die ('Error: ' . $e->GetMessage()); 

}finally{//es como un if else que tuviera un do while

    $base=null; 
}

?>
</body>
</html>