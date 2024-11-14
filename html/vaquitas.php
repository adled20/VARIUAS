<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/14.0.0/material-components-web.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.material.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/14.0.0/material-components-web.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.material.css">
    <link rel="stylesheet" href="../css/AdministradorVacas.css">
    <link rel="stylesheet" href="../css/Nav.css">
    <title>Grid Layout</title>

</head>

<body>
    <?php
    include "../php/Conexion.php";
    session_start();
    $sesion=$_SESSION['dni'];
    if (isset($_POST['nombre'])) {
        $identificacion = $_POST['identificacion'];
        $nombre = $_POST['nombre'];
        $fecha_de_registro_animal = $_POST['fecha_de_registro_animal'];
        $genero = $_POST['genero'];
        $descartada = $_POST['descartada'];
        $potrero_id = $_POST['potrero'];
    
        $sql = "UPDATE vacas SET 
                    identificacion='$identificacion', 
                    nombre='$nombre', 
                    fecha_de_registro_animal='$fecha_nacimiento', 
                    peso='$peso', 
                    estado_salud='$estado_salud',
                    genero='$genero',
                    id_raza='$id_raza' 
                WHERE id_animal=$id";
    
        if ($conexion->query($sql) === TRUE) {
            echo "Actualización exitosa!";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
    }
    
    ?>
    <div id="query" style="display: none;"></div>
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
                                    data-bs-toggle="dropdown" aria-expanded="false">Seleccionar Raza</a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <form id="EnviarRaza" action="./leche/RazaIndividual.php" method="post">
                                        <?php
                                        $Razas = $conexion->query("SELECT * FROM raza");
                                        while ($data = $Razas->fetch_object()) {
                                            ?>
                                            <li><a class="dropdown-item" onclick="NombreRaza('<?= $data->id_raza ?>')"
                                                    href="#" ><?= $data->nombre ?></a></li>
                                            <?php
                                        }
                                        ?>
                                        <input id="nom" type="hidden" name="raza">
                                    </form>



                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="LogoCowAlly">
            <div id="logo">
                <img id="cow" src="../imagenes/logo.svg" alt="">
            </div>
            <div id="ContenedorFunciones">
                <!-- REGISTRAR VACAS -->
                <div class="funciones">
                    <div class="ilustraciones">
                        <img class="Ilus" src="../imagenes/corral.svg" alt="">
                    </div>
                    <p>En CowAlly puedes crear potreros, asignarles nombres e insertarles vacas. ¿Deseas probarlo?</p>
                    <div class="CentrarBoton">
                        <!-- BOTON DE ACTIVACION MODAL -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#ModalRegistrar">
                            Launch demo modal
                        </button>

                        <!-- MODAL REGISTRAR -->
                        <div class="modal fade" id="ModalRegistrar" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollableg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Registrar Vaca</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <section class="Perfil d-flex">
                                            <img src="../imagenes/vaca.png" class="ImgPerfil" alt="">
                                            <div class="DivPerfil">
                                                <!-- SELECCIONAR RAZA Y NOMBRE -->
                                                <select name="Raza" class="form-select"
                                                    aria-label="Default select example">
                                                    <option selected>Seleccione la Raza</option>
                                                    <option value="1">One</option>
                                                </select>
                                                <label for="exampleFormControlInput1"
                                                    class="form-label">Identificacion</label>
                                                <input name="Nombre" type="text" class="form-control"
                                                    id="exampleFormControlInput1" placeholder="Nombre de vaca">

                                            </div>
                                        </section>
                                        <!-- INDIVIDUO DE INTERES -->
                                        <label for="exampleFormControlInput1" class="form-label">Individuo de interes
                                            (Opcional)</label>
                                        <input name="Interes" type="text" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Individuo de interes">
                                        <!-- NACIMIENTO -->
                                        <label for="exampleFormControlInput1" class="form-label">Fecha de
                                            nacimiento</label>
                                        <input name="Nacimiento" type="Date" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Seleccione fecha de nacimiento">
                                        <!-- PESO -->
                                        <label for="exampleFormControlInput1" class="form-label">Peso de la vaca</label>
                                        <input name="Nacimiento" type="number" class="form-control mb-3"
                                            id="exampleFormControlInput1" placeholder="Seleccione fecha de nacimiento">
                                        <!-- GENERO -->
                                        <select name="Genero" class="form-select mb-3"
                                            aria-label="Default select example">
                                            <option selected>Seleccione el genero</option>
                                            <option value="1">Femenino</option>
                                            <option value="2">Masculino</option>
                                        </select>
                                        <!-- SALUD -->
                                        <select name="Salud" class="form-select mb-3"
                                            aria-label="Default select example">
                                            <option selected>Seleccione el estado de salud</option>
                                            <option value="1">Femenino</option>

                                        </select>
                                        <!-- POTRERO -->
                                        <select name="Potrero" class="form-select" aria-label="Default select example">
                                            <option selected>Seleccione el potrero</option>
                                            <option value="1">Femenino</option>

                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">REGISTRAR VACA</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <table id="example" class="mdl-data-table" style="width:100%">
            <?php


#potrero
$vacas = $conexion->query("SELECT vacas.id,vacas.identificacion,vacas.nombre,vacas.fecha_de_registro_animal,vacas.genero,vacas.descartada, potrero.nombre as 'nombre potrero' from vacas join potrero
on
potrero.id = vacas.marcacion_id

where potrero.finca_id=
(select id from finca where usuario_dni = $sesion)"); ?>
            <thead>
                <tr>
                <th>Identificación</th>
                <th>Nombre</th>
                <th>Fecha de registro animal</th>
                <th>Género</th>
                <th>Descartada</th>
                <th>Razas</th>
                <th>Potrero</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr style='display: none'>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>320800</td>
                    <td>320800</td>
                    <td>320800</td>
                    <td>320800</td>
                </tr>
                <?php



    
    while($a = $vacas->fetch_assoc()) {
        ?> <tr>
                 <td><?=$a["identificacion"]?></td>
                <td><?=$a["nombre"]?></td>
                <td><?=$a["fecha_de_registro_animal"]?></td>
                <td><?=$a["genero"]?></td>
                <td><?=$a["descartada"]?></td>
                <td>
                    <?php
                $sql2= "SELECT raza.nombre as 'nombre de raza' FROM raza
                where id_raza in(select raza_id_raza from razas_de_la_vaca
                where vacas_id_animal =$a[id])";
                
                $razas = $conexion->query($sql2); 
               while ($raza =$razas ->fetch_assoc()) {
                    echo $raza['nombre de raza']."   ";
                    
                }
                ?>
                </td>
                <td><?= $a['nombre potrero']?>
                <td><button class="btn btn-primary" onclick="Editar('<?= $a['id'] ?>')">Editar</button></td>
                <td><button class="btn btn-warning">Eliminar</button></td>

                
            </tr>
            <?php
    }
    


                ?>

            </tbody>
        </table>
    </div>

    <script>
        function Editar(id) {
            IdEjercicio = id;
            var parametros = {
                "Idvaca": id,
                "apellido": "hurtado",
                "telefono": "123456789"
            };
            $.ajax({
                data: parametros,
                url: '../php/ajax/BuscarVaca.php',
                type: 'POST',

                beforeSend: function () {
                    $('#ID_Mostrar_infor').html("Mensjae antes de enviar");

                },
                success: function (response) {
                    // Insertar el modal en el body
                    $('body').append(response);
                    // Mostrar el modal
                    $('#ModalActualizar').modal('show');

                    // Limpiar el modal después de cerrarlo
                    $('#ModalActualizar').on('hidden.bs.modal', function () {
                        $(this).remove(); // Eliminar el modal del DOM
                    });
                }
            });
        }
    </script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "language": {
                    "lengthMenu": "Mostrar " + "<select><option>10</option><option>25</option><option>50</option></select> " + " Registros por página",
                    "zeroRecords": "Nada encontrado - disculpa",
                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                    "infoEmpty": "(Filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function NombreRaza(nombre) {
            document.getElementById("nom").value = nombre;
            document.getElementById("EnviarRaza").submit();
        }

        function BuscarVaca(id) {
            var IdVaca = document.getElementById("idAct").value;
            var parametros = {
                "Identificacion": IdVaca,
                "apellido": "hurtado",
                "telefono": "123456789"
            };
            $.ajax({
                data: parametros,
                url: '../php/ajax/BuscarVaca.php',
                type: 'POST',

                beforeSend: function () {
                    $('#query').html("Mensjae antes de enviar");

                },
                success: function (mensaje_mostrar) {
                    $('#query').html(mensaje_mostrar);

                }
            });

        }
    </script>
</body>

</html>