<?php
include('../modelo/UsuarioMod.php');
$obj = new usuario();
if($_POST){

    $obj->idUsuario = $_POST['idUsuario'];
    $obj->NombreUsuario= $_POST['NombreUsuario'];
    $obj->ApellidoUsuario= $_POST['ApellidoUsuario'];
    $obj->TelefonoUsuario = $_POST['TelefonoUsuario'];
    $obj->CorreoUsuario = $_POST['TelefonoUsuario'];
    $obj->DireccionUsuario = $_POST['DireccionUsuario'];
    $obj->IniciosesionUsuario = $_POST['IniciosesionUsuario'];
    $obj->ContraseñaUsuario = $_POST['ContraseñaUsuario'];
    $obj->idDocumento = $_POST['idDocumento'];
}
    if(isset($_POST['guarda'])){
    $obj->agregar();
}
    if(isset($_POST['modifica'])){
    $obj->modificar();
}
    if(isset($_POST['elimina'])){
    $obj->eliminar();
}
    if(isset($_POST['limpia'])){
    $obj->limpiar();
}
?>