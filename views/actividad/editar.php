<div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                        <li><a href="?controller=homepage">Inicio</a></li>
                        <li><a href="?controller=actividad">Procedimientos</a></li>
                        <li class="active">Editar</li>
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
                                            <li role="presentation" >
                                                <a href="?controller=departamento" data-toggle="tab">
                                                <i class="material-icons">list</i> Listado
                                                </a>
                                            </li>
                                        <li role="presentation" class="active">
                                            <a href="edit" data-toggle="tab">
                                            <i class="material-icons">edit</i> Edición
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="edit">
                                            <div class="body">
                                                <h4 class="card-inside-title">Editar Procedimiento</h4>
                                                <br>
                                                <form action="?controller=actividad&method=update" id="form_validation" method="POST">
                                                    <div class="row clearfix">
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="hidden" class="form-control" name="id_actividad" value="<?php echo $data[0]->id_actividad ?>">
                                                                    <input type="text" class="form-control" name="actividad" value="<?php echo $data[0]->actividad ?>" required>
                                                                    <label class="form-label">Procedimiento</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <textarea rows="4" class="form-control no-resize" placeholder="Descripción" name="descripcion" ><?php echo $data[0]->descripcion ?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="codigo_maestro" value="<?php echo $data[0]->codigo_maestro ?>" required>
                                                                    <label class="form-label">Código Maestro</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="prioridad" value="<?php echo $data[0]->prioridad ?>" required>
                                                                    <label class="form-label">Prioridad</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="modal-footer float-right">
                                                        <a href="?controller=actividad" type="button" value="Cancelar" class="btn btn-secundary">Cancelar</a>
                                                        <button class="btn bg-teal waves-effect">Editar</button>
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