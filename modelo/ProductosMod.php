<?php
    class Productos{
                    public $idProducto;
                    public $idProveedor;
                    public $NombreProducto;
                    public $CategoriaProducto;
                    public $PrecioVentaProducto;
                    public $PrecioIngresoProducto;
                    public $EntradaProducto;
                    public $SalidaProducto;
                    public $CantidadProducto;
                    public $DescripcionProducto;


                function agregar(){
                        $conec = new Conexion();
                                    $c = $conec->conectando();
                                    $query = "select * from Productos where idProducto = '$this->idProducto'";
                                        $ejecuta = mysqli_query($c, $query);
                                    if(mysqli_fetch_array($ejecuta)){
                                        echo "<script> alert('El Producto ya Existe en el Sistema')</script>";
                                    }else{
                                        $insertar = "insert into Productos value(
                                        '$this->idProducto',
                                        '$this->idProveedor',
                                        '$this->NombreProducto',
                                        '$this->CategoriaProducto',
                                        '$this->PrecioVentaProducto',
                                        '$this->PrecioIngresoProducto',
                                        '$this->EntradaProducto',
                                        '$this->SalidaProducto',
                                        '$this->CantidadProducto',
                                        '$this->DescripcionProducto')";
                                        echo $insertar;
                                        mysqli_query($c,$insertar);
                                        echo "<script> alert('El Producto fue Agregado en el Sistema')</script>"; 
                                    }
                                    }

                function modificar(){
                            $conec = new Conexion();
                                        $c = $conec->conectando();
                                        $query = "select * from Producto where idProducto = '$this->idProducto'";
                                        $ejecuta = mysqli_query($c, $query);
                                    if(mysqli_fetch_array($ejecuta)){
                                        echo "<script> alert('El Producto fue modificado')</script>";
                                    }else{
                                        $update = "update Producto set 
                                        idProducto='$obj->idProducto',
                                        idProveedor='$obj->idProveedor',
                                        NombreProducto='$obj->NombreProducto',
                                        CategoriaProducto='$obj->CategoriaProducto',
                                        PrecioVentaProducto='$obj->PrecioVentaProducto',
                                        PrecioIngresoProducto='$obj->PrecioIngresoProducto',
                                        EntradaProducto='$obj->EntradaProducto',
                                        SalidaProducto='$obj->SalidaProducto',
                                        CantidadProducto='$obj->CantidadProducto',
                                        DescripcionProducto='$obj->DescripcionProducto'
                                        where  idProducto, = '$this->idProducto',";
                                        echo $update;
                                        mysqli_query($c,$update);
                                        echo "<script> alert('El Producto fue Modificado en el Sistema')</script>";
                                            }                    
                                        }
                function eliminar(){
                    $conec = new Conexion();
                                    $c = $conec->conectando();
                                       $query = "select * from Producto where idProducto = '$this->idProducto'";
                                        $ejecuta = mysqli_query($c, $query);
                                    if(mysqli_fetch_array($ejecuta)){
                                        echo "<script> alert('El Producto fue eliminado correctamente')</script>";
                                    }else{
                                        $erase = "erase Producto set
                                        idProducto='$obj->idProducto',
                                        idProveedor='$obj->idProveedor',
                                        NombreProducto='$obj->NombreProducto',
                                        CategoriaProducto='$obj->CategoriaProducto',
                                        PrecioVentaProducto='$obj->PrecioVentaProducto',
                                        PrecioIngresoProducto='$obj->PrecioIngresoProducto',
                                        EntradaProducto='$obj->EntradaProducto',
                                        SalidaProducto='$obj->SalidaProducto',
                                        CantidadProducto='$obj->CantidadProducto',
                                        DescripcionProducto='$obj->DescripcionProducto'
                                        where  idProducto, = '$this->idProducto',";
                                        echo $erase;
                                        mysqli_query($c,$erase);
                                        echo "<script> alert('El Producto fue eliminado en el Sistema')</script>";
                                            }                    
                                        }
                                        function limpiar(){}
}
?>