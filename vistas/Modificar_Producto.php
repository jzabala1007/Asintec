<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../configuracion/css/bootstrap.min.css">
    <title>Modificar Producto</title>
</head>
<body>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded Larger shadow border border-dark ">
        <img src="../imagenes/LogoAsintec.jpg"width="150" height="110">
            <form action="" name="Modificar Producto">
                <h3 class="shadow p-3 mb-5 bg-body rounded">Modificar Producto</h3>
    <table class="table table-hover table-bordered">
        <tbody>
            <tr>
                <td class="table-primary">Nombre de Producto</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Nombres"placeholder="Digite nombre del producto" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Categoria de Producto</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Categorias "placeholder="Digite la Categoria del Producto" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Precio de Venta</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Precios"placeholder="Ingrese Precio de Venta" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Precio de Ingreso</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Precios"placeholder="Ingrese Ingrese Precio de Ingreso" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Entrada de Producto</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="Entradas"placeholder="Ingrese la Cantidad de Producto" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Descripción de Producto </td>
                <td><input class="border border-dark  accordionform-control form-control-sm" type="text" name="Descripcion"placeholder="Digite las Caracteristicas" aria-label=".form-control-sm example"></td>
            /tr>
        </tbody>
        </table>
            <td colspan="2">
                <center>
                    <a href="Productos_stock.php">
                        <button class=" btn-sm btn btn-outline-success" type="button" name="guarda">Guardar Cambios</button>
                    </a>
                    <a href="Productos_stock.php">
                        <button class=" btn-sm  btn btn-outline-danger" type="button" name="salir">Cerrar</button>
                    </a>  
                </center>
            </td>
        </form>
    </div>
</body>