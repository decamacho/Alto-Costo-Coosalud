            <div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                        <li><a href="?controller=homepage">Inicio</a></li>
                        <li class="active">Departamentos</li>
                    </ol>            
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h3>Departamentos</h3>
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
                                            <i class="material-icons">list</i> Dapartamento
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#listm" data-toggle="tab">
                                            <i class="material-icons">list</i> Municipio
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#add" data-toggle="tab">
                                            <i class="material-icons">add</i> Agregar
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#add_masive" data-toggle="tab">
                                            <i class="material-icons">add</i> Masivo Departamento
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#add_masivem" data-toggle="tab">
                                            <i class="material-icons">add</i> Masivo Municipio
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
                                                            <th>Departamento</th>
                                                            <th>Código DANE</th>
                                                            <th>País</th>
                                                            <th>Estado</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($departamentos as $departamento) : ?>
                                                            <tr>
                                                                <td><?php echo $departamento->id_departamento?></td>
                                                                <td><?php echo $departamento->departamento?></td>
                                                                <td><?php echo $departamento->codigo_dane?></td>
                                                                <td>Colombia</td>
                                                                <td><?php echo $departamento->estado?></td>
                                                                <td>
                                                                    <a href="?controller=departamento&method=view&id=<?php echo $departamento->id_departamento ?>"><i class="material-icons">edit</i></a>
                                                                    <i class="material-icons">delete</i>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade in active" id="listm">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Número</th>
                                                            <th>Municipio</th>
                                                            <th>Código DANE</th>
                                                            <th>Departamento</th>
                                                            <th>Estado</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($municipios as $municipio) : ?>
                                                            <tr>
                                                                <td><?php echo $municipio->id_municipio?></td>
                                                                <td><?php echo $municipio->municipio?></td>
                                                                <td><?php echo $municipio->codigo_dane?></td>
                                                                <td><?php echo $municipio->departamento?></td>
                                                                <td><?php echo $municipio->estado?></td>
                                                                <td>
                                                                    <a href="?controller=departamento&method=view&id=<?php echo $departamento->id_departamento ?>"><i class="material-icons">edit</i></a>
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
                                                <h4 class="card-inside-title">Agregar Departamento</h4>
                                                <form action="?controller=departamento&method=save" id="form_validation" method="POST">
                                                    <div class="row clearfix">
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="departamento" required>
                                                                    <label class="form-label">Departamento</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="pais" required>
                                                                    <label class="form-label">País</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="codigo_dane" required>
                                                                    <label class="form-label">Código DANE</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="modal-footer float-right">
                                                        <button class="btn btn-primary">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="add_masive">
                                            <div class="body">
                                                <h4 class="card-inside-title">Agregar Departamento Masivo</h4>
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">
                                                            <div class="header">
                                                                <h2>Cargar Archivo CSV</h2>
                                                                <ul class="header-dropdown m-r--5">
                                                            </div>
                                                            <div class="body">
                                                                <form action="?controller=departamento&method=masive" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
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
                                        <div role="tabpanel" class="tab-pane fade" id="add_masivem">
                                            <div class="body">
                                                <h4 class="card-inside-title">Agregar Municipio Masivo</h4>
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">
                                                            <div class="header">
                                                                <h2>Cargar Archivo CSV</h2>
                                                                <ul class="header-dropdown m-r--5">
                                                            </div>
                                                            <div class="body">
                                                                <form action="?controller=departamento&method=masiveM" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
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