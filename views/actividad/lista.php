            <div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                        <li><a href="?controller=homepage">Inicio</a></li>
                        <li class="active">Procedimientos</li>
                    </ol>            
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h3>Procedimientos</h3>
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
                                                            <th>Número</th>
                                                            <th>Procedimiento</th>
                                                            <th>Descripción</th>
                                                            <th>Código Maestro</th>
                                                            <th>Prioridad</th>
                                                            <th>Estado</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($actividades as $actividad) : ?>
                                                            <tr>
                                                                <td><?php echo $actividad->id_actividad?></td>
                                                                <td><?php echo $actividad->actividad?></td>
                                                                <td><?php echo $actividad->descripcion?></td>
                                                                <td><?php echo $actividad->codigo_maestro?></td>
                                                                <td><?php echo $actividad->prioridad?></td>
                                                                <td><?php echo $actividad->estado?></td>
                                                                <td>
                                                                    <a href="?controller=actividad&method=view&id=<?php echo $actividad->id_actividad?>"><i class="material-icons">edit</i></a>
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
                                                <h4 class="card-inside-title">Agregar Procedimiento</h4>
                                                <form action="?controller=actividad&method=save" id="form_validation" method="POST">
                                                    <div class="row clearfix">
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="actividad" required>
                                                                    <label class="form-label">Procedimiento</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Descripción" name="descripcion"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="codigo_maestro" required>
                                                                    <label class="form-label">Código Maestro</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="prioridad" required>
                                                                    <label class="form-label">Prioridad</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer float-right">
                                                        <a href="?controller=actividad" type="button" value="Cancelar" class="btn btn-secundary">Cancelar</a>   
                                                        <button class="btn bg-teal waves-effect">Agregar</button>
                                                    </div>
                                                </form>
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