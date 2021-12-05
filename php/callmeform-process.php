<?php
$errorMSG = "";

if (empty($_POST["nombre"])) {
    $errorMSG = "nombre es requerido ";
} else {
    $nombre = $_POST["nombre"];
}

if (empty($_POST["teléfono"])) {
    $errorMSG = "teléfono es requerido ";
} else {
    $teléfono = $_POST["teléfono"];
}

if (empty($_POST["Correo_Electronico"])) {
    $errorMSG = "Correo_Electronico es requerido ";
} else {
    $Correo_Electronico = $_POST["Correo_Electronico"];
}

if (empty($_POST["seleccionar"])) {
    $errorMSG = "seleccionar es requerido ";
} else {
    $seleccionar= $_POST["seleccionar"];
}

if (empty($_POST["terminos"])) {
    $errorMSG = "terminos es requerido ";
} else {
    $terminos = $_POST["terminos"];
}

$Correo_para = "paraisotayrona5@gmail.com";
$Asunto = "Nueva solicitud de cotización desde la página de inicio de paraiso tayrona 5 ";

// prepare email body text
$Body = "";
$Body .= "nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "teléfono: ";
$Body .= $teléfono;
$Body .= "\n";
$Body .= "Correo_Electronico: ";
$Body .= $Correo_Electronico;
$Body .= "\n";
$Body .= "COTIZACIÓN: ";
$Body .= $seleccionar;
$Body .= "\n";
$Body .= "terminos: ";
$Body .= $terminos;
$Body .= "\n";

// send email
$éxito = mail($Correo_para, $Asunto, $Body, "From:".$Correo_Electronico);
// redirigir a la página de éxito
if ($éxito && $errorMSG == ""){
   echo "éxito";
}else{
    if($errorMSG == ""){
        echo "Algo salió mal :(";
    } else {
        echo $errorMSG;
    }
}
?>