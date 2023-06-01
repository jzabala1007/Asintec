<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="Descripcion" content="html5, css, php, jsp">
            <link rel="stylesheet" href="../Configuracion/css/bootstrap.min.css">
            <link rel="stylesheet" href="../Configuracion/css/font-awesome.min.css">
            <title>Detalle de Pedido</title>
        </head>
        <body>
            <div class="container shadow-lg p-3 mb-5 bg-body rounded">
                <div class="table-responsive">
                <img src="../imagenes/LogoAsintec.jpg"width="150" height="110">
                <form action="" name="detallepedido" method="POST">
                    <table class="table table-borderless shadow-lg p-3 mb-5">
                        <thead>
                            <tr>
                                <th><input class="form-control" name="Buscar" placeholder="Digite que desea buscar"></th>
                                <th><button class="btn btn-primary btn-sm" name="Consultar" type="submit"><i class="fa fa-search" aria-hidden="true">  Buscar</i></button></th>
                            </tr>
                        </thead>
                    </table>
                    <br>
                    <hr>
                    <table class="table table-striped table-hover table-bordered border-success">
                        <tbody class= "table table-sm">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pedidos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detalle de Pedido</li>
                </ol>
            </nav>
        </tbody>
            <thead class="table-success">
                <tr>
                    <th>ID Cuentas por pagar</th>
                    <th>Tipo de cuenta por pagar</th>
                    <th>Valores</th>
                    <th>Abonos</th>
                    <th>Valor total por pagar</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
        <tbody>
                <tr>
                    <td>1</td>
                    <td>compra de producto</td>
                    <td>$ 2.500.000</td>
                    <td>$ 500.000</td>
                    <td>$ 2.000.000</td>
                    <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                    <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Pagos de servicios publicos</td>
                    <td>$ 300.000</td>
                    <td>$ 180.000</td>
                    <td>$ 120.000</td>
                    <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                    <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Compra de bitrinas</td>
                    <td>$ 4.000.000</td>
                    <td>$ 0</td>
                    <td>$ 4.000.000</td>
                    <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                    <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                </tr>
        </tbody>
            </table>
                <button type="button" class="btn btn-warning">Añadir venta</button>
            </div>
                <td colspan="2">
                <center>
                    <button class="btn-sm btn btn-outline-success" type="button"name="imprime">Imprimir</button>
                    <button class="btn-sm  btn btn-outline-danger" type="button"name="cierra">salir</button>
                </center>
            </td>
            <div>
        </form>
    </body>
</html>