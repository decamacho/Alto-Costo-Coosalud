            <div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                        <li><a href="?controller=homepage">Inicio</a></li>
                        <li class="active">IPS</li>
                    </ol>            
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h3>IPS</h3>
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
                                        <li role="presentation">
                                            <a href="#listm" data-toggle="tab">
                                            <i class="material-icons">list</i> IPS
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#add" data-toggle="tab">
                                            <i class="material-icons">add</i> Agregar
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#add_masivem" data-toggle="tab">
                                            <i class="material-icons">add</i> Masivo IPS
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="listm">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Número</th>
                                                            <th>IPS</th>
                                                            <th>NIT</th>
                                                            <th>Red</th>
                                                            <th>Municipio</th>
                                                            <th>Estado</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($centros as $ips) : ?>
                                                            <tr>
                                                                <td><?php echo $ips->id_ips?></td>
                                                                <td><?php echo $ips->ips?></td>
                                                                <td><?php echo $ips->red?></td>
                                                                <td><?php echo $ips->nit?></td>
                                                                <td><?php echo $ips->municipio?></td>
                                                                <td><?php echo $ips->estado?></td>
                                                                <td>
                                                                    <a href="?controller=municipio&method=view&id=<?php echo $municipio->id_municipio ?>"><i class="material-icons">edit</i></a>
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
                                                <h4 class="card-inside-title">Agregar IPS</h4>
                                                <form action="?controller=ips&method=save" id="form_validation" method="POST">
                                                    <div class="row clearfix">
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="ips" required>
                                                                    <label class="form-label">Nombre</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="nit" required>
                                                                    <label class="form-label">NIT</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-sm-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="red" required>
                                                                    <label class="form-label">Red</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
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
                                                    </div> 
                                                    <div class="modal-footer float-right">
                                                        <button class="btn btn-primary">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="add_masivem">
                                            <div class="body">
                                                <h4 class="card-inside-title">Agregar IPS Masivo</h4>
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">
                                                            <div class="header">
                                                                <h2>Cargar Archivo CSV</h2>
                                                                <ul class="header-dropdown m-r--5">
                                                            </div>
                                                            <div class="body">
                                                                <form action="?controller=ips&method=masive" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                                                    <div class="dz-message">
                                                                        <div class="drag-icon-cph">
                                                                            <i class="material-icons">touch_app</i>
                                                                        </div>
                                                                        <h3>Carga varias IPS en un solo clic</h3>
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