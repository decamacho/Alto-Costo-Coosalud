<div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                        <li><a href="?controller=homepage">Inicio</a></li>
                        <li><a href="?controller=persona&method=afiliado">Afiliado</a></li>
                        <li class="active">Detalle Afiliado</li>
                    </ol>            
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">  
                                <h3>Detalle Afiliado <?php echo $detalles[0]->nombre ?> <?php echo $detalles[0]->apellido ?></h3>
                                <small>Documento <?php echo $detalles[0]->documento ?></small>
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
                                <ul class="nav nav-tabs tab-nav-left justify-content-end" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#list" data-toggle="tab">
                                        <i class="material-icons">list</i> Validación Programa
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="list">
                                        <div class="row clearfix">
                                            <?php foreach ($detalles as $detalle) : ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="card">
                                                        <div class="header">
                                                            <a href="?controller=persona&method=cita&per=<?php echo $detalle->id_persona?>&tp=<?php echo $detalle->id_paciente ?>">
                                                                <h2>
                                                                    <?php echo $detalle->paciente?>
                                                                </h2>
                                                            </a>
                                                            <small><?php echo $detalle->programa?></small>
                                                        </div>
                                                        <div class="body">
                                                            <a href="?controller=persona&method=cita&per=<?php echo $detalle->id_persona?>&tp=<?php echo $detalle->id_paciente ?>"><i class="material-icons">assignment_turned_in</i></a>
                                                            <a href="#"><i class="material-icons">cached</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="add">
                                        <div class="body">
                                            <h4 class="card-inside-title">Agregar Tipo Paciente</h4>
                                            <!--<form action="?controller=paciente&method=save" id="form_validation" method="POST">-->
                                                <div class="row clearfix">
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="nombre" id="nombre" onkeypress="return soloLetras(event)" required>
                                                                <label class="form-label">Nombre</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-sm-6">
                                                        <label for="id_riesgo"><h4><small>Riesgo</small></h4></label>
                                                        <select class="form-control show-tick" name='id_riesgo' id="id_riesgo">
                                                            <option value="">-- Selecciona Riesgo --</option>
                                                            
                                                            <?php 
                                                                foreach ($riesgos as $riesgo) {
                                                                    ?>
                                                                        <option value="<?php echo $riesgo->id_riesgo ?>"><?php echo $riesgo->riesgo ?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="id_programa"><h4><small>Programa</small></h4></label>
                                                        <select class="form-control show-tick" name='id_programa' id="id_programa">
                                                            <option value="">-- Selecciona el Programa --</option>
                                                            <?php 
                                                                foreach ($programas as $pro) {
                                                                    ?>
                                                                        <option value="<?php echo $pro->id_programa ?>"><?php echo $pro->programa ?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <textarea rows="4" class="form-control no-resize" placeholder="Descripción" name="descripcion" id="descripcion"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="card-inside-title">Agregar Procedimiento</h4>
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <label for="id_actividad"><h4><small>Actividad</small></h4></label>
                                                        <select class="form-control show-tick" name='id_actividad' id="id_actividad">
                                                            <option value="">-- Selecciona Actividad --</option>
                                                            <?php 
                                                                foreach ($actividades as $acti) {
                                                                    ?>
                                                                        <option value="<?php echo $acti->id_actividad ?>"><?php echo $acti->actividad    ?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="id_frecuencia"><h4><small>Frecuencia</small></h4></label>
                                                        <div class="input-group form-float">
                                                            <div class="form-line">
                                                                <select class="form-control show-tick" name='id_frecuencia' id="id_frecuencia">
                                                                    <option value="">-- Selecciona la Frecuencia --</option>
                                                                    <?php 
                                                                        foreach ($frecuencias as $fre) {
                                                                            ?>
                                                                                <option value="<?php echo $fre->id_frecuencia ?>"><?php echo $fre->frecuencia ?></option>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <span class="input-group-addon">
                                                                <input type="button" id="addElements" value="Agregar Actividad +" class="btn btn-primary">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="card-inside-title">Plan Tipo Paciente: </h4>
                                                <div class="row clearfix">
                                                    <div class="col-sm-8">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped table-hover">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th>Actividad</th>
                                                                        <th>Frecuencia</th>
                                                                        <th>Opción</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="list-procedimiento">
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>        
                                                    <div id="mensaje"></div>
                                                <br>
                                                <div class="modal-footer float-right">
                                                    <a href="?controller=actividad" type="button" value="Cancelar" class="btn btn-secundary">Cancelar</a>   
                                                    <input type="button" id="proceso" class="btn bg-teal waves-effect" value="Agregar">
                                                </div>
                                            <!--</form>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>