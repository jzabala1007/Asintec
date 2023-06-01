<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="Descripcion" content="html5, css, php, jsp">
            <link rel="stylesheet" href="../Configuracion/css/bootstrap.min.css">
            <link rel="stylesheet" href="../Configuracion/css/font-awesome.min.css">
            <title>Proyecto</title>
        </head>
        <body>
            <div class="container shadow-lg p-3 mb-5 bg-body rounded">
                <div class="table-responsive">
                    <h2>
                        <figure>
                        <blockquote class="blockquote-footer">
                            <p>ASINTEC.</p>
                        </blockquote>
                        <figcaption class="blockquote">
                             CONTABILIDAD <cite title="Source Title">pag en desarrollo</cite>
                        </figcaption>
                        </figure>
                    </h2>
                <form action="" name="categoria" method="POST">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th><button name="Nuevo" type="button"><i class="fa fa-chevron-left fa-2x" aria-hidden="true">  VOLVER</i></button></th>
                                <th><button class="btn btn-link class btn-outline-dark btn-lg " name="PAGINA-PRINCIPAL" type="button"><i class="fa fa-home fa-4x" aria-hidden="true">HOME</i></button></th>
                                <th><button name="Consultar" type="submit"><PERFIL class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></button></th>
                                <th><input class="form-control" name="Buscar" placeholder="Que deseas buscar?" ></th>
                                <th><button class="btn btn-dark" name="Consultar" type="submit"><i class="fa fa-search" aria-hidden="true">  Buscar</i></button></th>
                                <th><button name="Cerrar" type="button"><i class="fa fa-cog fa-2x" aria-hidden="true"></i></th>
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
    <li class="breadcrumb-item"><a href="#">Productos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ventas</li>
  </ol>
</nav>
                        </tbody>
                            <thead class="table-success">
                                <tr>
                                    <th>ID producto</th>
                                    <th>Nombre producto</th>
                                    <th>Costo producto venta</th>
                                    <th>Cantidad</th>
                                    <th>Valor total venta</th>
                                    <th>Modificar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Xiaomi X12</td>
                                <td>$ 2.500.000</td>
                                <td>4</td>
                                <td>$ 10.000.000</td>
                                <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                                <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Samsung Galaxy S22</td>
                                <td>$ 3.500.000</td>
                                <td>2</td>
                                <td>$ 7.000.000</td>
                                <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                                <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Samsung Galaxy S22 plus</td>
                                <td>$ 4.000.000</td>
                                <td>5</td>
                                <td>$ 20.000.000</td>
                                <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                                <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Asus ZenFone 8 Flip</td>
                                <td>$ 3.700.000</td>
                                <td>9</td>
                                <td>$ 33.300.000</td>
                                <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                                <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Samsung Galaxy S21</td>
                                <td>$ 2.700.000</td>
                                <td>5</td>
                                <td>$ 13.500.000</td>
                                <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                                <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Iphone 13 Pro Max</td>
                                <td>$ 5.700.000</td>
                                <td>10</td>
                                <td>$ 57.000.000</td>
                                <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                                <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Iphone 12 Mini</td>
                                <td>$ 3.000.000</td>
                                <td>3</td>
                                <td>$ 9.000.000</td>
                                <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                                <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Asus ROG phone 5</td>
                                <td>$ 6.000.000</td>
                                <td>4</td>
                                <td>$ 24.000.000</td>
                                <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                                <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>OPPO 3X Pro</td>
                                <td>$ 3.200.000</td>
                                <td>2</td>
                                <td>$ 6.400.000</td>
                                <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                                <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Xiaomi Redmi Note 8</td>
                                <td>$ 1.200.000</td>
                                <td>8</td>
                                <td>$ 9.600.000</td>
                                <th><button class="btn btn-info" name="Modificar" type="submit">Modificar</button></th>
                                <th><button class="btn btn-danger" name="Eliminar" type="submit">Eliminar</button></th>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-warning">Añadir venta</button>
                </div>
                <table>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-success" type="button">GUARDAR CAMBIOS</button>
                        <button class="btn btn-primary" type="button">REGRESAR</button>
                    </div>
                </table>
            <div>
        </form>
    </body>
</html>