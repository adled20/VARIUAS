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
 <div class="modal fade" id="ModalActualizar" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollableg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Actualizar Vaca</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <section class="Perfil d-flex">
                                            <img src="../imagenes/vaca.png" class="ImgPerfil" alt="">
                                            <div class="DivPerfil">
                                                <!-- SELECCIONAR RAZA Y NOMBRE -->
                                                <select name="RazaAct" class="form-select" aria-label="Default select example">
                                                    <option selected><?=$raza?></option>
                                                    <option value="1">One</option>
                                                </select>
                                                <label for="exampleFormControlInput1" class="form-label">Identificacion del animal</label>
                                                <input name="idAct" type="text" class="form-control" id="idAct" placeholder="<?=$identificacion?>">
                                                
                                            </div>
                                        </section>
                                        <!-- INDIVIDUO DE INTERES -->
                                        <label for="exampleFormControlInput1" class="form-label">Individuo de interes (Opcional)</label>
                                        <input name="InteresAct" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Individuo de interes">
                                        <!-- NACIMIENTO -->
                                        <label for="exampleFormControlInput1" class="form-label">Fecha de nacimiento</label>
                                        <input name="NacimientoAct" type="Date" class="form-control" id="exampleFormControlInput1" placeholder="<?= $fecha ?>">
                                        <!-- PESO -->
                                        <label for="exampleFormControlInput1" class="form-label">Peso de la vaca</label>
                                        <input name="NacimientoAct" type="number" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Seleccione fecha de nacimiento">
                                        <!-- GENERO -->
                                        <select name="GeneroAct" class="form-select mb-3" aria-label="Default select example">
                                            <option selected><?= $genero ?></option>
                                            <option value="1">Femenino</option>
                                            <option value="2">Masculino</option>
                                        </select>
                                        <!-- SALUD -->
                                        <select name="SaludAct" class="form-select mb-3" aria-label="Default select example">
                                            <option selected>Seleccione el estado de salud</option>
                                            <option value="1">Femenino</option>

                                        </select>
                                        <!-- POTRERO -->
                                        <select name="PotreroAct" class="form-select" aria-label="Default select example">
                                            <option selected><?= $potrero ?></option>
                                            <option value="1">Femenino</option>

                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">ACTUALIZAR VACA</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>