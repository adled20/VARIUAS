<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- INSERCIONES DE AJAX Y JQUERY (ESTA CASADO CON DATATABLES)  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="../../css/Nav.css">
    <link rel="stylesheet" href="../../css/perfil/PerfilVaca.css">
    <!-- INSERCION DE DATATABLES Y SU ESTILOS -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/14.0.0/material-components-web.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.material.js"></script>
    <link rel="stylesheet" href="../../css/Nav.css">
    <link rel="stylesheet" href="../../css/leche/LecheRazaIndividual.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/14.0.0/material-components-web.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.material.css">
    <title>Raza de vaca</title>

</head>

<body>
    <div id="BarraLateral">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar">
            <span class="fs-4">Sidebar</span>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">Orders</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">Products</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">Customers</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="BloqueContenedor">
        <div id="navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Dropdown link</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <section id="Informacion" class="d-flex ms-4 mt-4">
            <div>
                <form class="d-flex Buscar mb-3">
                    <input class="form-control me-2" type="search" placeholder="Coloque ID de vaca" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>

                <div class="d-flex Contenedor">
                    <div class="d-flex imag">
                        <img src="../../imagenes/informe.svg" alt="">
                    </div>
                    <button class="btn btn-primary botones ms-3">Genealogia</button>
                    <button type="button" class="btn btn-primary botones" data-bs-toggle="modal"
                        data-bs-target="#RegistroMedico">Registro medico</button>
                    <button class="btn btn-primary botones">Trazabilidad</button>
                </div>

            </div>
            <div class="d-flex flex-column fs-4">
                <p>Raza: </p>
                <p>Potrero: </p>
                <p>Estado: </p>
            </div>
        </section>


    </div>
    <!-- MODAL REGISTRO MEDICO -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="RegistroMedico" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body fs-4">
                    <div id="InforRegistro" class="d-flex">
                        <div class=" fs-4">
                            <p>CODIGO:</p>
                        </div>
                        <div class="ms-3 fs-4">
                            <p>RAZA:</p>
                        </div>
                        <div class="ms-3 fs-4">
                            <p>POTRERO:</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <p>EMBARAZO: </p>
                        </div>
                        <div class="">
                            <p>CODIGO DE MADRE:</p>
                        </div>
                        <div class="">
                            <p>CODIGO DE PADRE:</p>
                        </div>
                    </div>

                    <p>CODIGO DE TORO PREÑADOR:</p>
                    <p>MODO CONCEPCION:</p>
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <p>FECHA DE CHEQUEO:</p>
                            <p>FECHA DE PROXIMO CHEQUEO:</p>
                        </div>
                        
                        <div class="">
                            <p>PESO:</p>
                            <p>CONDICION CORPORAL:</p>
                        </div>
                    </div>
                    <table id="example" class="mdl-data-table mb-3" style="width:100%">
                        <thead>
                            <tr>
                                <th>Enfermedad</th>
                                <th>Tratamiento</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger</td>
                                <td>Nixon</td>

                            </tr>

                        </tbody>
                    </table>
                    <h3>Descripcion:</h3>
                    <div class="scroll border border-secundary">
 <p clas="justify"> </p>
</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  $(document).ready( function () {
    $('#example').DataTable({
      "language":{
        "lengthMenu":"Mostrar "+ "<select><option>3</option><option>10</option><option>15</option></select> " +" Registros por página",
        "zeroRecords":"Nada encontrado - disculpa",
        "info":"Mostrando la página _PAGE_ de _PAGES_",
        "infoEmpty":"(Filtrado de _MAX_ registros totales)",
        "search": "Buscar:",
        "paginate":{
          "next":"Siguiente",
          "previous": "Anterior"
        }
      }
    });
} );
</script>

</body>

</html>