            <div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                        <li><a href="?controller=homepage">Inicio</a></li>
                        <li class="active">Semanas</li>
                    </ol>            
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h3>Listado de Semanas <?php echo $semanas[0]->periodo ?></h3>
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
                                        <i class="material-icons">list</i> Semanas
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#add" data-toggle="tab">
                                        <i class="material-icons">add</i> Agregar
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="list">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Número Semana</th>
                                                        <th>Fecha Inicio</th>
                                                        <th>Fecha Final</th>
                                                        <th>Año</th>
                                                        <th>Realizado</th>
                                                        <th>Plan</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($semanas as $semana) : ?>
                                                        <tr>
                                                            <td><?php echo $semana->numero_semana?></td>
                                                            <td><?php echo $semana->fecha_inicio?></td>
                                                            <td><?php echo $semana->fecha_final?></td>
                                                            <td><?php echo $semana->periodo?></td>
                                                            <td>13 de 20</td>
                                                            <td>
                                                                <a href="?controller=semana&method=more&week=<?php echo $semana->id_semana?>"><i class="material-icons">accessibility</i></a>
                                                            </td>
                                                            <td>
                                                                <i class="material-icons">edit</i>
                                                                <i class="material-icons">done</i>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="add">
                                        <div class="body">
                                            <h4 class="card-inside-title">Agregar Semana</h4>
                                            <form action="?controller=semana&method=save" id="form_validation" method="POST">
                                                <div class="row clearfix">
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="numero_semana" required>
                                                                <label class="form-label">Número de Semana</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <label for="fecha_ingreso"><h4><small>Fecha de Inicio</small></h4></label>
                                                            <div class="input-group form-float">
                                                                <div class="form-line">
                                                                    <input type="date" class="form-control" name="fecha_inicio" id="fecha_ingreso">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="fecha_ingreso"><h4><small>Fecha de Finalización</small></h4></label>
                                                            <div class="input-group form-float">
                                                                <div class="form-line">
                                                                    <input type="date" class="form-control" name="fecha_final" id="fecha_ingreso">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer float-right">
                                                    <a href="?controller=programa" type="button" value="Cancelar" class="btn btn-secundary">Cancelar</a>   
                                                    <button class="btn bg-teal waves-effect">Agregar</button>
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