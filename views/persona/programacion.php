<div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                    <li><a href="?controller=homepage">Inicio</a></li>
                        <li><a href="?controller=programa">Programa</a></li>
                        <li><a href="?controller=paciente&method=more&id=<?php echo $citas[0]->id_programa ?>">Tipo Paciente</a></li>
                        <li><a href="?controller=persona&method=all&paciente=<?php echo $citas[0]->id_paciente ?>"><?php echo $citas[0]->paciente ?></a></li>
                        <li class="active">Detalle Programación Usuario</li>
                    </ol>            
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">  
                                <h3>Detalle Programación <?php echo $citas[0]->nombre?> <?php echo $citas[0]->apellido?> / <?php echo $citas[0]->paciente ?></h3>
                                <small><?php echo $citas[0]->tipo?> <?php echo $citas[0]->documento?></small>
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
                                        <i class="material-icons">list</i> <?php echo $citas[0]->paciente ?>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="list">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Actividad</th>
                                                        <th>Fecha Aprox. Cita</th>
                                                        <th>Estado</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($citas as $cita) : ?>
                                                        <tr>
                                                            <td><?php echo $cita->actividad?></td>
                                                            <td><?php echo $cita->fecha_cita?></td>
                                                            <td>Pendiente</td>
                                                            <td>
                                                                <i class="material-icons">flag</i>
                                                                <i class="material-icons">add</i>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                        