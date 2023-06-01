<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="html5, css, php, js">
    <link rel="stylesheet" href="../configuracion/css/bootstrap.min.css">
    <link rel="stylesheet" href="../configuracion/css/classe.css">
    <link rel="stylesheet" href="../configuracion/css/font-awesome.min.css">
    <title>Proyecto_Sena</title>
</head>
<body>
<div class="form-group mb-md" aling="center"><br>
			<img src="../imagenes/asintec.png">
	</div>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded">
        <div class="table-responsive">
            <h2>Egreso</h2>
            <form action="" name="Egreso" method="POST">
                <table class="table table-sm">
                <thead>
                    <tr>
                        <th><button class="btn-sm" name="nuevo" type="button"><i class="fa fa-print" aria-hidden="true"></i></button></th>
                       
                        <th>
                        <span class="input-group-text" id="basic-addon3"><i class="fa fa-search" aria-hidden="true"></i>
                            <input class="form-control form-control-sm" name="buscar" placeholder="digite la categoria a buscar">
                        </span>
                        </th>
                        <th><button class="btn btn-primary btn-sm" name="consulta" type="submit" >Buscar</button></th>
                        <th><button class="btn btn-warning btn-sm" name="Guardar" type="button">Guardar</button></th>
                        <th><button  class="btn btn-success btn-sm" name="cerrar" type="button" >salir</button></th>
                    </tr>
                </thead>
            </table>
            <br>
            <hr>
            <table class="table table-sm table-striped table-hover table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Producto (Stock)</th>
                        <th>Cantidad</th>
                        <th>Serial ID</th>
                        <th>Marca</th>
                        <th>Valor</th>
                        <th>Proveedor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PC Escritorio Todo en Uno</td>
                        <td>4</td>
                        <td>21545</td>
                        <td>Mac</td>
                        <td>$4'600.000</td>
                        <td>Apple</td>
                    </tr>
                    <tr>
                    <td>Iphone 10</td>
                        <td>8</td>
                        <td>6589421</td>
                        <td>Apple</td>
                        <td>$2'700.000</td>
                        <td>Apple</td>
                        

                    </tr>

                </tbody>
            </table>
            </div>
             <nav aria-label="...">
                <ul class="pagination btn-sm">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Siguiente</a>
                </li>
            </ul>
            </nav>
        </div>
    </form>
</body>
</html>