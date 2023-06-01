<?php
   class usuario{
                  public $idUsuario;
                  public $NombreUsuario;
                  public $ApellidoUsuario;
                  public $TelefonoUsuario;
                  public $CorreoUsuario;
                  public $DireccionUsuario;
                  public $IniciosesionUsuario;
                  public $ContraseñaUsuario;
                  public $idDocumento;


                  function agregar(){
                     $conec = new Conexion();
                                       $c = $conec->conectando();
                                        $query = "select * from usuario where idUsuario = '$this->idUsuario'";
                                       $ejecuta = mysqli_query($c, $query);
                                       if(mysqli_fetch_array($ejecuta)){
                                          echo "<script> alert('el usuario ya Existe en el Sistema')</script>";
                                       }else{
                                          $insertar = "insert into usuario value(
                                          '$this->idUsuario', 
                                          '$this->NombreUsuario',
                                          '$this->ApellidoUsuario',
                                          '$this->TelefonoUsuario',
                                          '$this->CorreoUsuario',
                                          '$this->DireccionUsuario',
                                          '$this->IniciosesionUsuario',
                                          '$this->ContraseñaUsuario',
                                          '$this->idDocumento')";
                                          echo $insertar;
                                          mysqli_query($c,$insertar);
                                          echo "<script> alert('El Usuario fue Creado en el Sistema')</script>"; 
                                       }
                                    }

                  function modificar(){
                     $conec = new Conexion();
                                       $c = $conec->conectando();
                                        $query = "select * from usuario where idUsuario = '$this->idUsuario'";
                                       $ejecuta = mysqli_query($c, $query);
                                       if(mysqli_fetch_array($ejecuta)){
                                          echo "<script> alert('el usuario fue modificado')</script>";
                                       }else{
                                          $update = "update usuario set 
                                          idUsuario='$obj->idUsuario',
                                          NombreUsuario='$obj->NombreUsuario',
                                          ApellidoUsuario='$obj->ApellidoUsuario',
                                          TelefonoUsuario='$obj->TelefonoUsuario',
                                          CorreoUsuario='$obj->CorreoUsuario',
                                          DireccionUsuario='$obj->DireccionUsuario',
                                          IniciosesionUsuario='$obj->IniciosesionUsuario',
                                          ContraseñaUsuario='$obj->ContraseñaUsuario',
                                          idDocumento='$obj->idDocumento'
                                          where  idUsuario, = '$this->idUsuario',";
                                          echo $update;
                                          mysqli_query($c,$update);
                                          echo "<script> alert('el usuario fue Modificado en el Sistema')</script>";
                                             }                    
                                          }
                  function eliminar(){
                     $conec = new Conexion();
                                       $c = $conec->conectando();
                                       $query = "select * from usuario where idUsuario = '$this->idUsuario'";
                                       $ejecuta = mysqli_query($c, $query);
                                       if(mysqli_fetch_array($ejecuta)){
                                          echo "<script> alert('el usuario fue eliminado correctamente')</script>";
                                       }else{
                                          $erase = "erase usuario set
                                          idUsuario='$obj->idUsuario',
                                          NombreUsuario='$obj->NombreUsuario',
                                          ApellidoUsuario='$obj->ApellidoUsuario',
                                          TelefonoUsuario='$obj->TelefonoUsuario',
                                          CorreoUsuario='$obj->CorreoUsuario',
                                          DireccionUsuario='$obj->DireccionUsuario',
                                          IniciosesionUsuario='$obj->IniciosesionUsuario',
                                          ContraseñaUsuario='$obj->ContraseñaUsuario',
                                          idDocumento='$obj->idDocumento'
                                          where  idUsuario, = '$this->idUsuario', ";
                                          echo $erase;
                                          mysqli_query($c,$erase);
                                          echo "<script> alert('el usuario fue eliminado en el Sistema')</script>";
                                             }                    
                                          }
                                          function limpiar(){}
}
?>