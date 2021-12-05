<?php
$errorMSG = "";

if (empty($_POST["nombre"])) {
    $errorMSG = "nombre es requerido ";
} else {
    $name = $_POST["nombre"];
}

if (empty($_POST["Correo_Electronico"])) {
    $errorMSG = "Correo_Electronico es requerido ";
} else {
    $email = $_POST["Correo_Electronico"];
}

if (empty($_POST["seleccionar"])) {
    $errorMSG = "seleccionar es requerido ";
} else {
    $select = $_POST["seleccionar"];
}

if (empty($_POST["terminos"])) {
    $errorMSG = "terminos es requerido ";
} else {
    $terminos = $_POST["terminos"];
}

$Correo_para = "paraisotayrona5@gmail.com";
$Asunto = "Nueva solicitud de servicio de restaurante de la página de inicio de paraiso tayrona 5";

// prepare email body text
$Body = "";
$Body .= "nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Correo_Electronico: ";
$Body .= $Correo_Electronico;
$Body .= "\n";
$Body .= "SERVICIO_DE_RESTAURANTE: ";
$Body .= $seleccionar;
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
        echo "Algo salió mal :(";
    } else {
        echo $errorMSG;
    }
}
?>