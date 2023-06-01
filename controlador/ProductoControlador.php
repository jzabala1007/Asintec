<?php
include('../modelo/ProductosMod.php');
$obj = new Productos();
if($_POST){

    $obj->idProducto = $_POST['idProducto'];
    $obj->idProveedor = $_POST['idProveedor'];
    $obj->NombreProducto= $_POST['NombreProducto'];
    $obj->CategoriaProducto= $_POST['CategoriaProducto'];
    $obj->PrecioVentaProducto = $_POST['PrecioVentaProducto'];
    $obj->PrecioIngresoProducto = $_POST['PrecioIngresoProducto'];
    $obj->EntradaProducto = $_POST['EntradaProducto'];
    $obj->SalidaProducto = $_POST['SalidaProducto'];
    $obj->CantidadProducto = $_POST['CantidadProducto'];
    $obj->DescripcionProducto = $_POST['DescripcionProducto'];

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