<?php
include("../conexion/conectar.php");

if($_POST)
{
$obj->idProducto = $_POST['idProducto'];
}
$conec = new Conexion();
$c = $conec->conectando();
$query="select count(*) as totalRegistros from productos";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado); 
$totalRegistros = $arreglo['totalRegistros'];
//echo $totalRegistros;

$maximoRegistros = 4;
//echo $totalRegistros;
if(empty($_GET['pagina'])){
    $pagina=1;
}else{
    $pagina=$_GET['pagina'];
}
$desde = ($pagina-1)*$maximoRegistros;
$totalPaginas=ceil($totalRegistros/$maximoRegistros);
//echo $totalPaginas;


if(isset($_POST['search'])){
    echo "llegue";
    $query2="select * from productos where idProducto like '%$obj->idProducto%' limit $desde,$maximoRegistros";
    $resultado2=mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
}else{
    $query2="select * from productos limit $desde,$maximoRegistros ";
    $resultado2=mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="html5, css, php, jsp">
    <link rel="stylesheet" href="../configuracion/css/bootstrap.min.css">
    <title>Productos</title>
    <style>
    </style>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <div class="table-responsive">
        <div class="form-group mb-mb" aling="center"><br>
        <img src="../imagenes/LogoAsintec.jpg"width="150" height="110"> 
    </div>
            <h2 class="h2">Lista de Productos</h2>
    <form action=" " name="categoria" method="POST"> 
        <table class="table table-sm">
            <thead class="table-secondary">
                <tr>
                    <th><input class="form-control form-control-sm" name="buscar" placeholder="Digite Nombre de Producto"></th>
                    <th><button class="btn btn-primary btn-sm" name="consulta" type="button">Buscar</button></th>
                    <th>
                    <a href="Agregar_Producto.php">    
                        <button class="btn btn-outline-success btn-sm" name="Lista" type="button"> Agregar productos </button></th>
                    </a>
                    <th>      
            <select  class="btn btn-outline-dark btn-sm">
                <option value="value1">Rol</option>
                <option value="value1">Administrador</option>
                <option value="value1">Recepcionista</option>
                <option value="value1">Cajero</option>
                <option value="value1">Aux de Bodega</option>
            </select>
                </th>
                    <i class="bi bi-cloud-arrow-down"></i>
                    <td>
                        <a href="Modificar_Proveedor.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
            </thead>
        </table>
        <br>
        <hr>
        <table class="table table-sm table-striped table-hover table-bordered">
            <thead class="table-warning">
                <tr>
                    <th>idProducto</th>
                    <th>idProveedor</th>
                    <th>NombreProducto</th>
                    <th>CategoriaProducto</th>
                    <th>PrecioVentaProducto</th>
                    <th>PrecioIngresoProducto</th>
                    <th>EntradaProducto</th>
                    <th>SalidaProducto</th>
                    <th>CantidadProducto</th>
                    <th>DescripcionProducto</th>
                </tr>
                <?php
                            if($arreglo2==0)
                        {
                                    //echo "No existen Registros";
                                ?>
                                <div class="alert alert-success" role="alert">
                                <?php echo "No hay registros" ?>
                                </div>
                            <?php 
                        }   
                                else{
                                    do{   
                            ?> 
                        <tr>
                            <td><?php echo $arreglo2[0] ?></td>
                            <td><?php echo $arreglo2[1] ?></td>
                            <td><?php echo $arreglo2[2] ?></td>
                            <td><?php echo $arreglo2[3] ?></td>
                            <td><?php echo $arreglo2[4] ?></td>
                            <td><?php echo $arreglo2[5] ?></td>
                            <td><?php echo $arreglo2[6] ?></td>
                            <td><?php echo $arreglo2[7] ?></td>
                            <td><?php echo $arreglo2[8] ?></td>
                            <td><?php echo $arreglo2[9] ?></td>
                        </tr>
                        <?php
                            }while($arreglo2 = mysqli_fetch_array($resultado2));
                        }
                        ?>
            </thead>
        </table>
        </div>
        </div>
    </form>
    <nav aria-label="Page navigation example" >
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</body>
</html>