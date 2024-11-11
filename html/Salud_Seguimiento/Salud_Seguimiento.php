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
    <title>Salud y segumiento</title>

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
       <section>
       
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalLeche">Produccion de leche</button>
<!-- MODAL DE LECHE -->
<div class="modal fade" id="ModalLeche" tabindex="-1" aria-labelledby="ModalLeche" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <label for="exampleFormControlInput1" class="form-label mb-3">Inserte identificacion de la vaca</label>
        <input name="Interes" type="text" class="form-control mb-3"
        id="exampleFormControlInput1" placeholder="ID Animal">
        <label for="exampleFormControlInput1" class="form-label mb-3">Inserte fecha de produccion</label>
        <input name="Interes" type="date" class="form-control mb-3"
        id="exampleFormControlInput1" placeholder="">
        <label for="exampleFormControlInput1" class="form-label mb-3">Litros producidos</label>
        <input name="Interes" type="number" class="form-control"
        id="exampleFormControlInput1" placeholder="Litros de leche">
       
        </div>
        </div>
        

    
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    
  </div>
</div>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalEmbarazo">
    Registro Embarazo
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="ModalEmbarazo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Fecha de descubrimiento:</label>
                <div class="col-sm-10">
                  <input type="date">
                </div>
              </div>
              <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Modo de concepcion</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Fecha pronosticada a parto</label>
                <div class="col-sm-10">
                  <input type="date"  id="">
                </div>
              </div>
              <label for="" class="col-sm-2 col-form-label">Descripcion</label>
             <textarea style="width: 100%;" name="" id=""></textarea>
              </div>
            </div>
            

        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalEnfermedad">
  Añadir Enfermedad
</button>

<!-- Modal -->
<div class="modal fade" id="ModalEnfermedad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Tipo:</label>
                <div class="col-sm-10">
                  <input type="text">
                </div>
              </div>
              <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Posible Causa</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Transmisible</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Descripcion</label>
                <div class="col-sm-10">
                   
                    <textarea style="width: 100%;" name="" id=""></textarea>
                </div>
              
              </div>
              <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Sintomas</label>
                <div class="col-sm-10">
                   
                    <textarea style="width: 100%;" name="" id=""></textarea>
                </div>
              
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTratamiento">
  Añadir Tratamiento
</button>

<!-- Modal -->
<div class="modal fade" id="ModalTratamiento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Tipo:</label>
                <div class="col-sm-10">
                <input type="text">
                </div>
              </div>
              <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Nombre Enfermedad</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Horarios Aplicacion</label>
                <div class="col-sm-10">
                    <input type="text">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Descripcion</label>
                <div class="col-sm-10">
                   
                    <textarea style="width: 100%;" name="" id=""></textarea>
                </div>
              
              </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
  

       </section>
    
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>