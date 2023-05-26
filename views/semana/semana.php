<div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                        <li><a href="?controller=homepage">Inicio</a></li>
                        <li><a href="?controller=semana">Semanas</a></li>
                        <li class="active"><?php echo $semana[0]->numero_semana?></li>
                    </ol>            
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h3>
                                    <?php 
                                       setlocale(LC_TIME, 'spanish');
                                       $date = $semana[0]->fecha_inicio;
                                       echo strftime("%d de %B", strtotime($date));
                                       ?> 
                                    al 
                                    <?php 
                                        setlocale(LC_TIME, 'spanish');
                                        $date = $semana[0]->fecha_final;
                                        echo strftime("%d de %B del %G", strtotime($date));
                                        ?>
                                </h3>
                                <small><?php echo $semana[0]->numero_semana?></small>
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
                                        <i class="material-icons">error</i> Pendiente
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#one" data-toggle="tab">
                                        <i class="material-icons">brightness_medium</i> Gestión uno
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#done" data-toggle="tab">
                                        <i class="material-icons">done</i> Realizado
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="list">
                                        <div class="table-responsive">
                                            <small>Pendientes para Gestión</small>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Apellido</th>
                                                        <th>Tipo Doc.</th>
                                                        <th>Documento</th>
                                                        <th>Teléfono</th>
                                                        <th>Adjunto</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($detalles as $detalle) : ?>
                                                        <tr>
                                                            <td><?php echo $detalle->nombre?></td>
                                                            <td><?php echo $detalle->apellido?></td>
                                                            <td><?php echo $detalle->abreviado?></td>
                                                            <td><?php echo $detalle->documento?></td>
                                                            <td><?php echo $detalle->telefono?></td>
                                                            <td><i class="material-icons">insert_drive_file</i></td>
                                                            <td>
                                                                <a href="?controller=semana&method=details&week=<?php echo $semana[0]->id_semana?>&user=<?php echo $detalle->id_persona ?>" class="btn bg-teal" type="button">Gestionar</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="one">
                                        <div class="table-responsive">
                                            <small>Gestión uno</small>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Apellido</th>
                                                        <th>Tipo Doc.</th>
                                                        <th>Documento</th>
                                                        <th>Teléfono</th>
                                                        <th>Adjunto</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($gestion as $detalle) : ?>
                                                        <tr>
                                                            <td><?php echo $detalle->nombre?></td>
                                                            <td><?php echo $detalle->apellido?></td>
                                                            <td><?php echo $detalle->abreviado?></td>
                                                            <td><?php echo $detalle->documento?></td>
                                                            <td><?php echo $detalle->telefono?></td>
                                                            <td><i class="material-icons">insert_drive_file</i></td>
                                                            <td>
                                                                <a href="?controller=semana&method=more&week=<?php echo $semana->id_semana?>" class="btn bg-teal" type="button">Gestionar</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="done">
                                        <div class="table-responsive">
                                            <small>Ya realizado</small>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Apellido</th>
                                                        <th>Tipo Doc.</th>
                                                        <th>Documento</th>
                                                        <th>Teléfono</th>
                                                        <th>Adjunto</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($hecho as $detalle) : ?>
                                                        <tr>
                                                            <td><?php echo $detalle->nombre?></td>
                                                            <td><?php echo $detalle->apellido?></td>
                                                            <td><?php echo $detalle->abreviado?></td>
                                                            <td><?php echo $detalle->documento?></td>
                                                            <td><?php echo $detalle->telefono?></td>
                                                            <td><i class="material-icons">insert_drive_file</i></td>
                                                            <td>
                                                                <a href="#" class="btn bg-teal" type="button">Gestionar</a>
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