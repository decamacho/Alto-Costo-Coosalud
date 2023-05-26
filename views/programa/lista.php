<div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                        <li><a href="?controller=homepage">Inicio</a></li>
                        <li class="active">Programas</li>
                    </ol>            
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h3>Programas</h3>
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
                                        <i class="material-icons">list</i> Programas
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
                                        <div class="row clearfix">
                                            <?php foreach ($programas as $programa) : ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="card">
                                                        <div class="header">
                                                            <a href="?controller=paciente&method=more&id=<?php echo $programa->id_programa?>">
                                                                <h2>
                                                                    <?php echo $programa->programa?>
                                                                </h2>
                                                            </a>
                                                            <small><?php echo $programa->descripcion?></small>
                                                        </div>
                                                        <div class="body">
                                                            <a href="?controller=paciente&method=more&id=<?php echo $programa->id_programa?>"><i class="material-icons">add</i></a>
                                                            <a href="?controller=programa&method=view&id=<?php echo $programa->id_programa?>"><i class="material-icons">edit</i></a>
                                                            <i class="material-icons">delete</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="add">
                                        <div class="body">
                                            <h4 class="card-inside-title">Agregar Programa</h4>
                                            <form action="?controller=programa&method=save" id="form_validation" method="POST">
                                                <div class="row clearfix">
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="programa" required>
                                                                <label class="form-label">Programa</label>
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