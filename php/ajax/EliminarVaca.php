<?php
include "..//Conexion.php";
$id=$_POST["Idvaca"];
$Traervaca=$conexion->query("select v.*, rv.raza_id_raza, r.nombre as nombreraza from vacas v
join razas_de_la_vaca rv
on rv.vacas_id_animal=v.id
join raza r 
on r.id_raza=rv.raza_id_raza
where v.id=$id");
$data=$Traervaca->fetch_object();
$identificacion=$data->identificacion;
$raza=$data->nombreraza;
$fecha=$data->fecha_de_registro_animal;
$genero=$data->genero;
$potrero=$data->potrero_id;

?>

                         

                                <!-- MODAL ELIMINAR -->
                                <div class="modal fade" id="ModalEliminar" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollableg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Eliminar Vaca</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <label for="exampleFormControlInput1" class="form-label">Identificacion
                                                    de la vaca</label>
                                                <input name="IdEliminar" type="text" class="form-control"
                                                    id="exampleFormControlInput1">
                                                <button class="btn btn-primary">Buscar</button><br>
                                                <label for="exampleFormControlInput1" class="form-label">Genero</label>
                                                <input name="GeneroEliminar" type="text" class="form-control"
                                                    id="exampleFormControlInput1">
                                                <label for="exampleFormControlInput1" class="form-label">Raza</label>
                                                <input name="RazaEliminar" type="text" class="form-control"
                                                    id="exampleFormControlInput1">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger">ELIMINAR VACA</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        