<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "nombre es requerido ";
} else {
    $nombre = $_POST["nombre"];
}

if (empty($_POST["Correo_Electronico"])) {
    $errorMSG = "Correo_Electronico es requerido ";
} else {
    $Correo_Electronico = $_POST["Correo_Electronico"];
}

if (empty($_POST["mensaje"])) {
    $errorMSG = "mensaje es requerido ";
} else {
    $mensaje = $_POST["mensaje"];
}

if (empty($_POST["terminos"])) {
    $errorMSG = "terminos es requerido ";
} else {
    $terminos = $_POST["terminos"];
}

$Correo_para = "paraisotayrona5@gmail.com";
$Asunto = "Nuevo mensaje de la página de inicio de paraiso tayrona 5";

// prepare email body text
$Body = "";
$Body .= "nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Correo_Electronico: ";
$Body .= $Correo_Electrinico;
$Body .= "\n";
$Body .= "mensaje: ";
$Body .= $mensaje;
$Body .= "\n";
$Body .= "terminos: ";
$Body .= $terminos;
$Body .= "\n";

// send email
$éxito = mail($Correo_para, $Asunto, $Body, "From:".$Correo_Electronico);

// redirect to éxito page 
if ($éxito && $errorMSG == ""){
   echo "éxito";
}else{
    if($errorMSG == ""){
        echo "Algo salió mal  :(";
    } else {
        echo $errorMSG;
    }
}
?>