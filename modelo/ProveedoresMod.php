<?php
    class proveedores{
                    public $idProveedor;
                    public $idDocumento;
                    public $NitProveedor;
                    public $NombreProveedor;
                    public $RazonSocialProveedor;
                    public $DireccionProveedor;
                    public $CiudadOrigenProveedor;
                    public $TelefonoProveedor;
                    public $CorreoProveedor;
                    public $VendedorProveedor;


                    function agregar(){
                        $conec = new Conexion();
                                        $c = $conec->conectando();
                                        $query = "select * from proveedores where idProveedor = '$this->idProveedor'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                            echo "<script> alert('el ID proveedor ya existe')</script>";
                                        }else{
                                            $insertar = "insert into Proveedores value(
                                            '$this->idProveedor', 
                                            '$this->idDocumento',
                                            '$this->NitProveedor',
                                            '$this->NombreProveedor',
                                            '$this->RazonSocialProveedor',
                                            '$this->DireccionProveedor',
                                            '$this->CiudadOrigenProveedor',
                                            '$this->TelefonoProveedor',
                                            '$this->CorreoProveedor',
                                            '$this->VendedorProveedor')";
                                            echo $insertar;
                                            mysqli_query($c,$insertar);
                                            echo "<script> alert('El Proveedor fue creado con exito')</script>"; 
                                        }
                                    }
                function modificar(){
                        $conec = new Conexion();
                                        $c = $conec->conectando();
                                        $query = "select * from Proveedores where idProveedor = '$this->idProveedor'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                            echo "<script> alert('el proveedor fue modificado')</script>";
                                        }else{
                                            $update = "update proveedores set 
                                            idProveedor='$obj->idProveedor',
                                            idDocumento='$obj->idDocumento',
                                            NitProveedor='$obj->NitProveedor',
                                            NombreProveedor='$obj->NombreProveedor',
                                            RazonSocialProveedor='$obj->RazonSocialProveedor',
                                            DireccionProveedor='$obj->DireccionProveedor',
                                            CiudadOrigenProveedor='$obj->CiudadOrigenProveedor',
                                            TelefonoProveedor='$obj->TelefonoProveedor',
                                            CorreoProveedor='$obj->CorreoProveedor'
                                            VendedorProveedor=$obj->VendedorProveedor
                                            where  idProveedor, = '$this->idProveedor',";
                                            echo $update;
                                            mysqli_query($c,$update);
                                            echo "<script> alert('el proveedor fue Modificado')</script>";
                                        }                    
                                    }
                function eliminar(){
                        $conec = new Conexion();
                                        $c = $conec->conectando();
                                       $query = "select * from Proveedores where idProveedor = '$this->idProveedor'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                            echo "<script> alert('el proveedor se elimino')</script>";
                                        }else{
                                            $erase = "erase proveedores set
                                            idProveedor='$obj->idProveedor',
                                            idDocumento='$obj->idDocumento',
                                            NitProveedor='$obj->NitProveedor',
                                            NombreProveedor='$obj->NombreProveedor',
                                            RazonSocialProveedor='$obj->RazonSocialProveedor',
                                            DireccionProveedor='$obj->DireccionProveedor',
                                            CiudadOrigenProveedor='$obj->CiudadOrigenProveedor',
                                            TelefonoProveedor='$obj->TelefonoProveedor',
                                            CorreoProveedor='$obj->CorreoProveedor'
                                            VendedorProveedor=$obj->VendedorProveedor
                                            where  idProveedor, = '$this->idProveedor',";
                                            echo $erase;
                                            mysqli_query($c,$erase);
                                            echo "<script> alert('el proveedor se elimino correctamente')</script>";
                                        }                    
                                    }
                function limpiar(){}
}
?>