<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

$nombre=$_GET["nombre"]; 
$apellido=$_GET["apellido"]; 

$credencial=$_GET["credencial"]; 
$email=$_GET["email"];

$usuario = $_GET["usuario"]; 
$contrasena=$_GET["password"]; 



try{

$base=new PDO('mysql:host=localhost; dbname=BasededatosTC', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //METODO CON DOS PARAMETROS PREDE PARA LOS ERRORES 
//(HAY UN MONTON D EPARAMETROS PREDE EN PHP.NET)

$base->exec("SET CHARACTER SET utf8");

$sql="INSERT INTO usuario  (NOMBRE,	APELLIDO, EMAIL, CREDENCIAL, USUARIO, CONTRASENA) 
VALUES (:nombre, :apellido, :email, :credencial, :usuario, :contrasena)"; 

$resultado=$base->prepare($sql); 

$resultado->execute(array(":nombre"=>$nombre, ":apellido"=>$apellido, ":credencial"=>$credencial,
 ":email"=>$email, ":usuario"=>$usuario, ":contrasena"=>$contrasena)); //esto es el marcador en un buscador

 echo "registro exitoso";



if ($resultado) {


    header("location: Pagina-Inicio-Sesion/login.php"); 

}
$resultado->CloseCursor(); 
}catch(Exception $e){ //exeption es un objeto. que tine sus propidedades y sus contras

  die ('Error: ' . $e->GetMessage()); 

}finally{//es como un if else que tuviera un do while

    $base=null; 
}



//en php, concretamente en esta libreria se generan erorres que no son de sintaxis  (ecepciones)

//aquí entra el try catch que parecen un if else
    ?> 
</body>
</html>