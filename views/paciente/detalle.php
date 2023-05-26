            <div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                        <li><a href="?controller=homepage">Inicio</a></li>
                        <li><a href="?controller=programa">Programa</a></li>
                        <li><a href="?controller=paciente&method=more&id=<?php echo $detalles[0]->id_programa?>">Tipo Paciente</a></li>
                        <li class="active">Detalle <?php echo $detalles[0]->nombre?></li>
                    </ol>            
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">  
                                <h3>Detalle <?php echo $detalles[0]->nombre?></h3>
                                <small><?php echo $detalles[0]->descripcion?></small>
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
                                        <i class="material-icons">list</i> Detalle
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="list">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Procedimiento</th>
                                                        <th>CUPS</th>
                                                        <th>Frecuencia</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($detalles as $paciente) : ?>
                                                        <tr>
                                                            <td><?php echo $paciente->actividad?></td>
                                                            <td><?php echo $paciente->codigo_maestro?></td>
                                                            <td><?php echo $paciente->frecuencia?></td>
                                                            <td>
                                                                <i class="material-icons">cached</i>
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
                                        