<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../configuracion/css/bootstrap.min.css">
    <title>Agregar Cliente</title>
</head>
<body>
      <div class="container shadow-lg p-3 mb-5 bg-body rounded Larger shadow border border-dark ">
      <img src="../imagenes/LogoAsintec.jpg"width="150" height="110">
        <form action="" name="Agregar Cliente">
          <h3 class="shadow p-3 mb-5 bg-body rounded">Agregar Nuevo Cliente</h3>
          <table class="table table-hover table-bordered">
            <tbody>
              <tr>
                <td class="table-primary ">Id Cliente</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="idClientes" placeholder="Codigo Asignado por el Sistema" aria-label=".form-control-sm example"></td>
              </tr><tr>
                <td class="table-primary ">Id Documento</td>
                <td>
                <select class="border border-dark form-control form-control-sm" type="text" name="idDocumento" id="idDocumento">
                <option value="value1">seleccione tipo de Documento...</option>
                <option value="value1">Cc</option>
                <option value="value1">Ti</option>
                <option value="value1">Cedula de Extranjeria</option>
                <option value="value1">Pasaporte</option>
            </select>
                </td>
              </tr>
              <tr>
                <td class="table-primary">Nombre </td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="NombreCliente"placeholder="Ingrese Nombres del proveedor" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Apellido </td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="ApellidoCliente"placeholder="Ingrese Apellidos del proveedor" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Direccion</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="DireccionCliente"placeholder="Ingrese Nombre o Razón Social" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Correo</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="CorreoCliente"placeholder="Ingrese Dirección de la Empresa" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Telefono</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="TelefonoCliente"placeholder="Ingrese Ciudad Origen de la Empresa" aria-label=".form-control-sm example"></td>
              </tr>
              
            </tbody>
          </table>
          <td colspan="2">
                  <center>
                    <a href="Clientes.php">
                      <button class=" btn-sm btn btn-outline-success" type="button" name="guarda">Guardar Cambios</button>
                    </a>
                      <a href="Clientes.php">
                      <button class=" btn-sm  btn btn-outline-danger" type="button" name="salir">Cerrar</button>
                    </a>  
                  </center>
          </td>
        </form>
      </div>
</body>
</html>