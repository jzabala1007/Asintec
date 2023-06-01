<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery V3.4.1 -->
    <script src="./js/jquery-3.4.1.min.js"></script>

    <!-- popper -->
    <script src="./js/popper.min.js"></script>

    <!-- Bootstrap V4.3 -->
    <script src="./js/bootstrap.min.js"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Bootstrap Material Design V4.0 -->
    <script src="./js/bootstrap-material-design.min.js"></script>
    <script>
    $(document).ready(function() {
        $('body').bootstrapMaterialDesign();
    });
    </script>

    <script src="./js/main.js"></script>

    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="./css/normalize.css">

    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

    <!-- Font Awesome V5.9.0 -->
    <link rel="stylesheet" href="./css/all.css">

    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="./css/sweetalert2.min.css">

    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="./js/sweetalert2.min.js"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">

    <!-- General Styles -->
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Asintec-master_21/configuracion/css/font-awesome.min.css">


    <style>
    .btn-small {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
    }
    </style>

</head>


<body>

    <!-- Content -->
    <div class="full-box tile-container">
        <div class="accordion" id="accordion1">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Proveedores
                            </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordion1">
                    <div class="accordion-body" style="text-align: right;">
                        <button type="button" class="btn btn-primary btn-sm btn-small" data-bs-toggle="modal"
                            data-bs-target="#crearProveedorModal">
                            <i class="fa fa-plus" aria-hidden="true"></i> Crear Proveedor
                        </button>
                        <table class="table table-striped table-bordered table-hover" id="proveedores">
                            <thead style="background-color: #B0B0B0;">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Proveedor</th>
                                    <th>Nit</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para crear proveedor -->
        <div class="modal fade" id="crearProveedorModal" tabindex="-1" role="dialog"
            aria-labelledby="crearProveedorModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #4FB0A9;">
                        <h5 class="modal-title fs-5" id="crearProveedorModalLabel" style="color: white;">Crear Proveedor</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="recipient-name" class="col-form-label" style="color: black;">
                                    <h6>Nombre Proveedor:</h6>
                                </label><br>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="recipient-name" class="col-form-label" style="color: black;">
                                    <h6>Nit:</h6>
                                </label><br>
                                <input type="text" class="form-control" name="nit" id="nit">

                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="recipient-name" class="col-form-label" style="color: black;">
                                    <h6>Telefono:</h6>
                                </label><br>
                                <input type="text" class="form-control" name="telefono" id="telefono">

                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="recipient-name" class="col-form-label" style="color: black;">
                                    <h6>Dirección:</h6>
                                </label><br>
                                <input type="text" class="form-control" name="direccion" id="direccion">

                            </div>


                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label for="recipient-name" class="col-form-label" style="color: black;">
                                    <h6>Descripción:</h6>
                                </label><br>
                                <textarea rows="6" class="form-control" name="descripcion" id="descripcion"></textarea>
                            </div>

                            <input type="hidden" id="idproveedor" name="idproveedor">


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="guardarProveedor">Guardar</button>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <div class="accordion" id="accordion2">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                productos
                            </font>
                        </font>
                    </button>

                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion2">
                    <div class="accordion-body">

                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="accordion" id="accordion3">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                pruebas
                            </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion3">
                    <div class="accordion-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
    </main>

	<script>

		

function limpiarProveedor() {
    $("#nombre").val("");
    $("#nit").val("");
    $("#telefono").val("");
    $("#direccion").val("");
    $("#descripcion").val("");
}

	</script>




</body>

</html>