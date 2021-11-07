<?php
require 'connection.php';

/*datos para el registro*/
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$option = $_POST["profile"];
$profession = $_POST["profession"];
$description = $_POST["description"];



/*condiciones para el registro*/
if($option=="null"){
    echo '<script language="javascript">alert("Debe seleccionar un Perfil Valido");</script>';
    require 'index.php';

} else if($option=="hunter"){
    echo '<script language="javascript">alert("Su perfil es HUNTER");</script>';
    $sql = "INSERT INTO signup (name,email,password,phone,profile)
    VALUES ('$name','$email','$password','$phone','$option')";
    $resultado = $mysqli->query($sql); 
    echo '<script language="javascript">alert("Usuario registrado con exito");</script>';
    require 'index.php';

} else if($option=="profesional"){
    echo '<script language="javascript">alert("Su perfil es PROFESIONAL");</script>';
    $sql = "INSERT INTO signup (name,email,password,phone,profile,profession,description)
    VALUES ('$name','$email','$password','$phone','$option','$profession','$description')";
    $resultado = $mysqli->query($sql); 
    echo '<script language="javascript">alert("Usuario registrado con exito");</script>';
    require 'index.php';
}

?>