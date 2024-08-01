<?php
try {


    $base=new PDO('mysql:host=localhost; dbname=BasededatosTC', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM usuario WHERE USUARIO= :usuario AND CONTRASENA= :password"; 

    $resultado=$base->prepare($sql); 

    $usuario=htmlentities(addcslashes($_POST["usuario"], "'")); 

    $password=htmlentities(addcslashes($_POST["password"], "'")); 

    $resultado->bindValue(":usuario", $usuario); 

    $resultado->bindValue(":password", $password); 

    $resultado->execute(); 

    $numero_registro=$resultado->rowCount(); 

    if ($numero_registro!=0) {



        session_start(); 

        $_SESSION["usuario"]=$_POST["usuario"]; 

        header("location: Pagina-Inicio/inicio.php"); 



    }else{


        header("location: Pagina-Inicio-SEsion/login.php"); 

    } 


}catch(Exception $e) {


    die ("Error: " . $e->getMessage());  
}



?>