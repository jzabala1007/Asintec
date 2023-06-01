<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../configuracion/css/bootstrap.min.css">
    <title>Agregar Proveedor</title>
</head>
<body>
      <div class="container shadow-lg p-3 mb-5 bg-body rounded Larger shadow border border-dark ">
      <img src="../imagenes/LogoAsintec.jpg"width="150" height="110">
        <form action="" name="Agregar proveedor">
          <h3 class="shadow p-3 mb-5 bg-body rounded">Agregar Nuevo proveedor</h3>
          <table class="table table-hover table-bordered">
            <tbody>
              <tr>
                <td class="table-primary ">ID de Proveedor</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="idProveedor" placeholder="Codigo Asignado por el Sistema" aria-label=".form-control-sm example"></td>
              </tr><tr>
                <td class="table-primary ">Nit de Proveedor</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="NitdeProveedor"placeholder="Nit de Identificación de la Empresa" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Nombres Proveedor</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Nombres"placeholder="Ingrese Nombres del proveedor" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Apellidos Proveedor</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Apellidos"placeholder="Ingrese Apellidos del proveedor" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Razon Social de Proveedor</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="RazónSocial"placeholder="Ingrese Nombre o Razón Social" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Dirección de Empresa Proveedor</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Dirección de Empresa"placeholder="Ingrese Dirección de la Empresa" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Ciudad de Origen de la Empresa</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="Ciudad Origen Empresa"placeholder="Ingrese Ciudad Origen de la Empresa" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Número de Telefono de Proveedor</td>
                <td><input class=" border border-dark form-control form-control-sm" type="tel" name="Telefono de Proveedor"placeholder="Ingrese Numero Telefonico de Proveedor" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Correo Electronico del Proveedor</td>
                <td><input class="border border-dark  accordionform-control form-control-sm" type="email" name="email" placeholder="Ingrese Correo Electronico de Proveedor" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Vendedor del Proveedor</td>
                <td><input class="border border-dark  accordionform-control form-control-sm" type="text" name="Nombre de Vendedor"placeholder="Ingrese Nombre de Vendedor" aria-label=".form-control-sm example"></td>
              </tr>
            </tbody>
          </table>
          <td colspan="2">
                  <center>
                    <a href="Proveedores.php">
                      <button class=" btn-sm btn btn-outline-success" type="button" name="guarda">Guardar Cambios</button>
                    </a>
                      <a href="Proveedores.php">
                      <button class=" btn-sm  btn btn-outline-danger" type="button" name="salir">Cerrar</button>
                    </a>  
                  </center>
          </td>
        </form>
      </div>
</body>
</html>