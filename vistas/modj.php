<?php
include("../conexion/conectar.php");

if($_POST)
{
    $obj->nombres = $_POST['nombres'];
    
}



$conet = new Conexion();
$c = $conet->conectando();
$query="select count(*) as totalRegistros from usuario";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado); 
$totalRegistros = $arreglo['totalRegistros'];
//echo $totalRegistros;

$maximoRegistros = 5;
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
    $query2="select * from usuario where nombres like '%$obj->nombres%' limit $desde,$maximoRegistros";
    $resultado2=mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($resultado2);
}else{
    $query2="select * from usuario limit $desde,$maximoRegistros ";
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
    <link rel="stylesheet" href="../config/css/bootstrap.min.css">
    <link rel="stylesheet" href="../config/css/font-awesome.min.css">	
    <link rel="stylesheet" href="../config/css/luna.css">
    <title>Administracion</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded " >
        <h2><i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i>buscar usuario</h2>
        <form action="" name="usuario" method="POST">
            <table class="table ">
                <thead>
                
                    <tr>
                    
                    <th><a href="usuario2.php">
                        <button class="btn btn-success" name="lista" type= "button">listar</button>
                        </a></th>

                        
                    </tr>
                    
                </thead>
            </table>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" name="nombres"  placeholder="Digite el Nombre o Código de la Categoria" aria-label="Search">
                        <button class="btn btn-outline-success" name="search"  type="submit"> Buscar</button>
                    </form>
                </div>
            </nav>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered table-sm shadow p-3 mb-5 bg-body rounded">
                    <thead>
                        <tr>
                            <td colspan="8" class="p-3 mb-2 bg-primary text-white"><h5>Lista de usuarios</h5></td>
                        </tr>
                    </thead>
                    <tbody >
                        <tr class="table-secondary">
                            <td>id</td>
                            <td>nombres</td>
                            <td>apellidos</td>
                            <td>direccion_entrega</td>
                            <td>ciudad_de_entrega</td>
                            <td>correo_electronico</td>
                            <td>numero_de_contacto</td>
                        </tr>
                            <?php
                                if($arreglo2==0){
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
                        </tr>
                        <?php
                            }while($arreglo2 = mysqli_fetch_array($resultado2));
                        }
                        ?>
                    </tbody>
                </table>
            </div>    
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <?php 
                    if($pagina!=1){
                    ?>
                    <li class="page-item ">
                        <a class="page-link" href="?pagina=<?php echo 1; ?>"><</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina-1; ?>"><<</a>
                    </li>
                    <?php
                    }
                    for($i=1; $i<=$totalPaginas; $i++){
                        if($i==$pagina){
                            echo'<li class="page-item active" aria-current="page"><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>';    
                        }
                        else{
                            echo'<li class="page-item "><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>'; 
                        }
                    }
                    if($pagina !=$totalPaginas){
                    ?>
                    
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina+1; ?>">>></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $totalPaginas; ?>">></a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </form>
    </div>
</body>
</html> 

<style>
* {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
    font-family: 'Josefin Sans', sans-serif;
    box-sizing: border-box;
}

body{
    background-color: aliceblue;
}

.wrapper{
    display: flex;
    position: relative;
}

.wrapper .sidebar {
    position: fixed;
    width: 199px;
    height: 100%;
    background-color: #007ecc;
    padding: 90px 0;
    box-shadow: 1px 1px 1px 1px rgb(70, 67, 67);
}

.wrapper .sidebar h2 {
    color: rgb(68, 155, 155);
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 30px;
}

.wrapper .sidebar ul li {
    padding: 15px;
    /* border-bottom: 1px solid;
border-top: 1px solid;*/
}

.wrapper .sidebar ul li a {
    color: #d8d8d8;
    display: block;
}

.wrapper .sidebar ul li a .fa {
    width: 25px;
}


/*
.wrapper .sidebar ul li:hover {
    background-color: rgb(212, 201, 201);
}*/

.wrapper .sidebar ul li:hover a {
    color: black;
}

.wrapper .main_content {
    width: 1100px;
    margin-left: 200px;
}

.wrapper .main_content .header {
    padding: 20px;
    background-color: #dce0e6;
    color: #007ecc;
    border-bottom: 1px solid #4dbaff;
    box-shadow: 1px 1px 2px 1px #007ecc;
}

.wrapper .main_content .info {
                                margin: 20px;
}
</style>   
<div class="wrapper">
        <div class="sidebar">
            <img src="../imagenes/LogoAsintec.jpg" height="100">
        <div class="header">
                Bienvenidos / Asintec
            
            <ul>
                <li><a href="---"target="marco"><i class="fa fa-address-card-o" aria-hidden="true"></i>-----</a></li>
                <li><a href="--" target="marco"><i class="fa fa-user-plus" aria-hidden="true"></i>---</a></li>
                <li><a href="--" target="marco"><i class="fa fa-ticket" aria-hidden="true"></i>---</a></li>
                <li><a href="--" target="marco"><i class="fa fa-list" aria-hidden="true"></i>---</a></li>
                <li><a href="--" target="marco"><i class="fa fa-shopping-bag" aria-hidden="true"></i>----</a></li>
                <li><a href="--" target="marco"><i class="fa fa-wrench" aria-hidden="true"></i>-------</a></li>
            </ul>
        </div>
        </div>


        <div class="main_content">
            <div class="header">
            </div>
            <div class="info">
                <div>
                    <iframe src="" name="marco" width="1120" height="450" frameborder="0"></iframe>
                </div>

            </div>
        </div>

    </div>



























// <tbody>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>jiku</td>
                    <td>Jacinto Rokas</td>
                    <td>6464313446</td>
                    <td>jiku@andrade.com</td>
                    <td>calle 840# 877-344</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td>
                        
                    <button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>giovany</td>
                    <td>Tracala Lapida</td>
                    <td>3200231316</td>
                    <td>gio@tracala.com</td>
                    <td>calle 50# 54-545</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>3</td>
                    <td>dino</td>
                    <td>Vanegas Rodamel</td>
                    <td>318985655</td>
                    <td>dino@vanegas.com</td>
                    <td>calle 42# 356-053</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>4</td>
                    <td>cris</td>
                    <td>Pilas Pardo</td>
                    <td>316566255</td>
                    <td>cris@plasss.com</td>
                    <td>ccalle 435# 257-859</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>5</td>
                    <td>yasuri</td>
                    <td>yolombo Tocino</td>
                    <td>315656232</td>
                    <td>yasu@yolo.com</td>
                    <td>carrera 455# 65-958</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td> 
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>6</td>
                    <td>teofilo</td>
                    <td>Quintana Vellandia</td>
                    <td>3132656523</td>
                    <td>teooo@quintana.com</td>
                    <td>carrera 145# 655-87</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>7</td>
                    <td>libardo</td>
                    <td>Tutaina Osorio</td>
                    <td>311613311</td>
                    <td>libardo@tutaina.com</td>
                    <td>carrera 868# 153-15</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>8</td>
                    <td>isturin</td>
                    <td>Tocara Tadina</td>
                    <td>312133656</td>
                    <td>isturin@tocara.com</td>>
                    <td>calle 875# 988-052</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>9</td>
                    <td>Emily</td>
                    <td>Andes Ramirez</td>
                    <td>3032020055</td>
                    <td>emily@ades.com</td>
                    <td>calle 152# 052-554</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>10</td>
                    <td>adriana</td>
                    <td>Polilla Toro</td>
                    <td>316643236</td>
                    <td>adriana@poli.com</td>
                    <td>carrera 66# 18-93</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>11</td>
                    <td>yury</td>
                    <td>Poncho Rocha</td>
                    <td>314454232</td>
                    <td>yuri@poncho.com</td>
                    <td>carrera 6# 25-21</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>12</td>
                    <td>tuti</td>
                    <td>Roma Cutiva</td>
                    <td>314131464</td>
                    <td>tuti@roma.com</td>
                    <td>calle 48# 45-75</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>13</td>
                    <td>kate</td>
                    <td>Rosas Torrica</td>
                    <td>316323232</td>
                    <td>kate@roca.com</td>
                    <td>calle 56# 85-49</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>14</td>
                    <td>Karla</td>
                    <td>Villas torana</td>
                    <td>325232666</td>
                    <td>carla@kilas.com</td>
                    <td>calle 49sur# 96-36</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>15</td>
                    <td>jidis</td>
                    <td>Atena Garcia</td>
                    <td>314646513</td>
                    <td>jids@atenas.com</td>
                    <td>calle 97sur# 18-35</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>16</td>
                    <td>bibiana</td>
                    <td>Costera Machado</td>
                    <td>315535585</td>
                    <td>bibiana@costaa.com</td>
                    <td>calle 48# 12-342</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>17</td>
                    <td>Jahana</td>
                    <td>Jifro Rito</td>
                    <td>319593339</td>
                    <td>nana@jifro.com</td>
                    <td>carrera 668# 785-455</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                    <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>18</td>
                    <td>Nidia</td>
                    <td>Porquis Marino</td>
                    <td>32178648</td>
                    <td>nidia@prquis.com</td>
                    <td>carrera 84# 58-32</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                    <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>   
                <tr>
                    <td>19</td>
                    <td>19</td>
                    <td>Jairo</td>
                    <td>Turco Gaitan</td>
                    <td>Jairo@turco.com</td>
                    <td>315543848</td>
                    <td>calle 106sur# 89-55</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="Agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>20</td>
                    <td>Diana</td>
                    <td>Atila Vallana</td>
                    <td>3155555313</td>
                    <td>diana@aatila.com</td>
                    <td>carrera 76# 85-23</td>
                    <td>Cedula de Ciudadania</td>
                    <td>Cedula de Ciudadania</td>
                    <td>
                        <a href="agregar_usuario.php">
                            <button class="btn btn-primary btn-sm" name="modifica" type="button">Modificar</button></td>
                        </a>
                    <td><button class="btn btn-danger btn-sm" name="elimina" type="button">Eliminar</button></td>
                </tr>
            </tbody>