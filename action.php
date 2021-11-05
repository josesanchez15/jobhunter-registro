<?php
$option = $_POST["profile"];

if($option=="null"){
    echo '<script language="javascript">alert("Debe seleccionar un Perfil Valido");</script>';

} else if($option=="hunter"){
    echo '<script language="javascript">alert("Su perfil es HUNTER");</script>';

} else if($option=="profesional"){
    echo '<script language="javascript">alert("Su perfil es PROFESIONAL");</script>';
}

?>