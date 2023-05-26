            <div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                        <li><a href="?controller=homepage">Inicio</a></li>
                        <li class="active">Usuario</li>
                    </ol>            
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h3>Usuarios</h3>
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
                                                            <th>Email</th>
                                                            <th>Rol</th>
                                                            <th>Estado</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($usuarios as $usuario) : ?>
                                                            <tr>
                                                                <td><?php echo $usuario->documento?></td>
                                                                <td><?php echo $usuario->nombre?> <?php echo $usuario->apellido?></td>
                                                                <td><?php echo $usuario->telefono?></td>
                                                                <td><?php echo $usuario->email?></td>
                                                                <td><?php echo $usuario->rol?></td>
                                                                <td><?php echo $usuario->estado?></td>
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
                                                <h4 class="card-inside-title">Agregar Usuario</h4>
                                                <h4 class="card-inside-title">Datos Básicos</h4>
                                                <form action="?controller=usuario&method=save" method="POST">
                                                    <div class="row clearfix">
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
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
                                                        <div class="col-sm-6">
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
                                                        <div class="col-sm-6">
                                                            <label for="id_rol"><h4><small>Rol</small></h4></label>
                                                            <select class="form-control show-tick" name='id_rol' id="id_rol">
                                                                <option value="">-- Selecciona Municipio --</option>
                                                                <?php 
                                                                    foreach ($roles as $rol) {
                                                                        ?>
                                                                            <option value="<?php echo $rol->id_rol ?>"><?php echo $rol->rol ?></option>
                                                                        <?php
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer float-right">
                                                        <a href="?controller=usuario" type="button" value="Cancelar" class="btn btn-secundary">Cancelar</a>   
                                                        <button type="submit" class="btn bg-teal">Agregar</button>
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