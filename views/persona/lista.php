            <div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                        <li><a href="?controller=homepage">Inicio</a></li>
                        <li><a href="?controller=programa">Programa</a></li>
                        <li><a href="?controller=paciente&method=more&id=<?php echo $more[0]->id_programa ?>">Tipo Paciente</a></li>
                        <li class="active">Afiliado <?php echo $more[0]->nombre ?></li>
                    </ol>            
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h3>Afiliados <?php echo $more[0]->nombre ?></h3>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Acción</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="main-card mb-3 card">
                                    <ul class="nav nav-tabs tab-nav-left justify-content-end" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#list" data-toggle="tab">
                                            <i class="material-icons">list</i> Listado
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#add" data-toggle="tab">
                                            <i class="material-icons">add</i> Agregar
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#add_masive" data-toggle="tab">
                                            <i class="material-icons">add</i> Masivo
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="list">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Documento</th>
                                                            <th>Nombre</th>
                                                            <th>Teléfono</th>
                                                            <th>Edad</th>
                                                            <th>Email</th>
                                                            <th>Diagnóstico</th>
                                                            <th>Asignado</th>
                                                            <th>Estado</th>
                                                            <th>Plan</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($afiliados as $afiliado) : ?>
                                                            <tr>
                                                                <td><?php echo $afiliado->documento?></td>
                                                                <td><?php echo $afiliado->nombre?> <?php echo $afiliado->apellido?></td>
                                                                <td><?php echo $afiliado->telefono?></td>
                                                                <td><?php echo $afiliado->edad?></td>
                                                                <td><?php echo $afiliado->email?></td>
                                                                <td><?php echo $afiliado->cie_10?></td>
                                                                <td><?php echo $afiliado->id_asignado ?></td>
                                                                <td><?php echo $afiliado->estado?></td>
                                                                <td>
                                                                    <a href="?controller=persona&method=cita&per=<?php echo $afiliado->id_persona?>&tp=<?php echo $more[0]->id_paciente ?>"><i class="material-icons">assignment_turned_in</i></a>
                                                                </td>
                                                                <td>
                                                                    <a href=""><i class="material-icons">edit</i></a>
                                                                    <i class="material-icons">delete</i>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="add">
                                            <div class="body">
                                                <h4 class="card-inside-title">Agregar Afiliado <?php echo $more[0]->nombre?></h4>
                                                <h4 class="card-inside-title">Datos Básicos</h4>
                                                <div class="row clearfix">
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="hidden" value="<?php echo $more[0]->programa ?>" id="nprograma">
                                                                <input type="hidden" value="<?php echo $more[0]->id_paciente ?>" id="idpaciente">
                                                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                                                <label class="form-label">Nombres</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                                                                <label class="form-label">Apellidos</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <label for="id_documento"><h4><small>Tipo Documento</small></h4></label>
                                                        <select class="form-control show-tick" name='id_documento' id="id_documento">
                                                            <option value="">-- Selecciona Documento --</option>
                                                            <?php 
                                                                foreach ($documentos as $documento) {
                                                                    ?>
                                                                        <option value="<?php echo $documento->id_tipo ?>"><?php echo $documento->tipo ?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <br><br>
                                                    <div class="col-sm-4">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="documento" id="documento" required>
                                                                <label class="form-label">Documento</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="email" class="form-control" name="email" id="email" required>
                                                                <label class="form-label">Correo</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="telefono" id="telefono" required>
                                                                <label class="form-label">Teléfono</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="direccion" id="direccion" required>
                                                                <label class="form-label">Dirección</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-sm-6">
                                                        <label for="fecha_nacimiento"><h4><small>Fecha de Nacimiento</small></h4></label>
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-sm-3">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="sexo" id="sexo" required>
                                                                <label class="form-label">Sexo</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="rh" id="rh" required>
                                                                <label class="form-label">RH</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="card-inside-title">Adicional</h4>
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <label for="id_municipio"><h4><small>Municipio</small></h4></label>
                                                        <select class="form-control show-tick" name='id_municipio' id="id_municipio">
                                                            <option value="">-- Selecciona Municipio --</option>
                                                            <?php 
                                                                foreach ($municipios as $municipio) {
                                                                    ?>
                                                                        <option value="<?php echo $municipio->id_municipio ?>"><?php echo $municipio->municipio ?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="id_regimen"><h4><small>Régimen</small></h4></label>
                                                        <select class="form-control show-tick" name='id_regimen' id="id_regimen">
                                                            <option value="">-- Selecciona Régimen --</option> 
                                                            <?php 
                                                                foreach ($regimenes as $regimen) {
                                                                    ?>
                                                                        <option value="<?php echo $regimen->id_regimen ?>"><?php echo $regimen->regimen ?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="id_asignado"><h4><small>Asignar Gestor</small></h4></label>
                                                        <select class="form-control show-tick" name='id_asignado' id="id_asignado">
                                                            <option value="">-- Asigna un Gestor --</option>
                                                            <?php 
                                                                foreach ($gestores as $gestor) {
                                                                    ?>
                                                                        <option value="<?php echo $gestor->id_persona ?>"><?php echo $gestor->nombre ?> <?php echo $gestor->apellido ?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <h4 class="card-inside-title">Programa / Comorbilidad</h4>
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <label for="id_paciente"><h4><small>Tipo Paciente</small></h4></label>
                                                        <select class="form-control show-tick" name='id_paciente' id="id_paciente">
                                                            <option value="">-- Selecciona Tipo Paciente --</option>
                                                            <?php 
                                                                foreach ($pacientes as $paciente) {
                                                                    ?>
                                                                        <option value="<?php echo $paciente->id_paciente ?>"><?php echo $paciente->nombre ?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="id_diagnostico"><h4><small>Diagnóstico</small></h4></label>
                                                        <select class="form-control show-tick" name='id_diagnostico' id="id_diagnostico">
                                                            <option value="">-- Selecciona Diagnóstico --</option>
                                                            <?php 
                                                                foreach ($diagnosticos as $diagnostico) {
                                                                    ?>
                                                                        <option value="<?php echo $diagnostico->id_diagnostico ?>"><?php echo $diagnostico->cie_10 ?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="fecha_diagnostico"><h4><small>Fecha de Diagnóstico</small></h4></label>
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="date" class="form-control" name="fecha_diagnostico" id="fecha_diagnostico" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <label for="fecha_ingreso"><h4><small>Fecha de Ingreso</small></h4></label>
                                                        <div class="input-group form-float">
                                                            <div class="form-line">
                                                                <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso">
                                                            </div>
                                                            <span class="input-group-addon">
                                                                <input type="button" id="addPrograma" value="Agregar Comorbilidad +" class="btn btn-primary">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="card-inside-title">Plan Afiliado: </h4>
                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped table-hover">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th>Tipo Paciente</th>
                                                                        <th>Diagnóstico</th>
                                                                        <th>Fecha Ingreso</th>
                                                                        <th>Fecha Diagnóstico</th>
                                                                        <th>Gestor Asignado</th>
                                                                        <th>Opciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="list-programa">
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div id="mensaje"></div>
                                                <div class="modal-footer float-right">
                                                    <a href="?controller=actividad" type="button" value="Cancelar" class="btn btn-secundary">Cancelar</a>   
                                                    <input type="button" class="btn bg-teal" id="plan" value="Agregar">
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="add_masive">
                                            <div class="body">
                                                <h4 class="card-inside-title">Agregar Procedimiento Masivo</h4>
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">
                                                            <div class="header">
                                                                <h2>Cargar Archivo CSV</h2>
                                                                <ul class="header-dropdown m-r--5">
                                                            </div>
                                                            <div class="body">
                                                                <form action="?controller=actividad&method=masive" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                                                    <div class="dz-message">
                                                                        <div class="drag-icon-cph">
                                                                            <i class="material-icons">touch_app</i>
                                                                        </div>
                                                                        <h3>Carga varios procedimientos en un solo clic</h3>
                                                                        <em>(Rescuerda cargar archivos no mayores a 30kb)</em>
                                                                    </div>
                                                                    <div class="fallback">
                                                                        <input name="masive" type="file"/>
                                                                        <input type='submit' name='masive' value='Cargar'>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>