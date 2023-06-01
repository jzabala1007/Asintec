<?php
include('../modelo/ProveedoresMod.php');
$obj = new Proveedores();
if($_POST){

    $obj->idProveedor = $_POST['idProveedor'];
    $obj->idDocumento= $_POST['idDocumento'];
    $obj->NitProveedo= $_POST['NitProveedo'];
    $obj->NombreProveedor = $_POST['NombreProveedor'];
    $obj->RazonSocialProveedor = $_POST['RazonSocialProveedor'];
    $obj->DireccionProveedor = $_POST['DireccionProveedor'];
    $obj->CiudadOrigenProveedor = $_POST['CiudadOrigenProveedor'];
    $obj->TelefonoProveedor = $_POST['TelefonoProveedor'];
    $obj->CorreoProveedor = $_POST['CorreoProveedor'];
    $obj->VendedorProveedor = $_POST['VendedorProveedor'];
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