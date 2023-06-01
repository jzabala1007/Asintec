<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../configuracion/css/bootstrap.min.css">
    <title>Agregar Inf Usuario</title>
</head>
<body>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded Larger shadow border border-dark ">
        <img src="../imagenes/LogoAsintec.jpg"width="150" height="110">
            <form action="" name="Agregar Inf Usuario">
                <h3 class="shadow p-3 mb-5 bg-body rounded">Agregar Inf Usuario</h3>
    <table class="table table-hover table-bordered">
        <tbody>
            <tr>
                <td class="table-primary ">ID de Usuario</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="idUsuario" placeholder="Codigo Asignado por el Sistema" aria-label=".form-control-sm example"></td>
            </tr><tr>
                <td class="table-primary ">ID de Documento</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="idDocumento"placeholder="Codigo Asignado por el Sistema" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Nombres de Usuario</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Nombres"placeholder="Ingrese los nombre del Usuario" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Apellidos de Usuario</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Apellidos "placeholder="Ingrese Apellidos de Usuario" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Numero Telefonico de Usuario</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Telefono"placeholder="Ingrese Numero Telefonico del Usuario" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Correo Electronico de Usuario</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Correo"placeholder="Ingrese Correo del Usuario" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Direccion de Usuario</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Direccion"placeholder="Ingrese Direccion de Usuario" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Inicio de Sesion</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="Inicio"placeholder="Digite un Nombre de Usuario" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Contraseña</td>
                <td><input class="border border-dark form-control form-control-sm" type="password" name="Contraseña"placeholder="Digite una Contraseña" aria-label=".form-control-sm example"></td>
            </tr>
            </tbody>
        </table>
            <td colspan="2">
                <center>
                    <a href="usuarios.php">
                        <button class=" btn-sm btn btn-outline-success" type="button" name="guarda">Guardar Cambios</button>
                    </a>
                    <a href="usuarios.php">
                        <button class=" btn-sm  btn btn-outline-danger" type="button" name="salir">Cerrar</button>
                    </a>  
                </center>
            </td>
        </form>
    </div>
</body>