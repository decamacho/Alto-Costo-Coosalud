            <div class="container-fluid">
                <br>
                <div class="body">
                    <ol class="breadcrumb">
                        <li><a href="?controller=homepage">Inicio</a></li>
                        <li><a href="?controller=semana">Semanas</a></li>
                        <li><a href="?controller=semana&method=more&week=<?php echo $semana[0]->id_semana?>"><?php echo $semana[0]->numero_semana?></a></li>
                        <li class="active">Gestión Usuario</li>
                    </ol>            
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <?php 
                                    if($uno != NULL){
                                        ?>
                                            <h3>Gestión <?php echo $uno[0]->nombre?> <?php echo $uno[0]->apellido?></h3>
                                        <?php
                                    }elseif($hecho != NULL){
                                        ?>
                                            <h3>Gestión <?php echo $hecho[0]->nombre?> <?php echo $hecho[0]->apellido?></h3>
                                        <?php
                                    }elseif($pendientes != NULL){
                                        ?>
                                            <h3>Gestión <?php echo $pendientes[0]->nombre?> <?php echo $pendientes[0]->apellido?></h3>
                                        <?php
                                    }

                                ?>
                                <small>
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
                                </small>
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
                                        <i class="material-icons">error</i> Pendiente <?php echo $countP[0]->count ?>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#one" data-toggle="tab">
                                        <i class="material-icons">brightness_medium</i> Gestión uno <?php echo $countU[0]->count ?>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#done" data-toggle="tab">
                                        <i class="material-icons">done</i> Realizado <?php echo $countH[0]->count ?>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="list">
                                        <?php foreach ($pendientes as $gestion) : ?>
                                            <form action="?controller=semana&method=update&id=<?php echo $gestion->id_programacion ?>&week=<?php echo $semana[0]->id_semana ?>&user=<?php echo $gestion->id_persona ?>" method="POST">
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">
                                                            <div class="body">
                                                                <h2 class="card-inside-title">Gestión Semanal <?php echo $gestion->paciente ?></h2>
                                                                <div class="row clearfix">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $gestion->documento ?>" disabled>
                                                                                <label class="form-label">Documento</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $gestion->telefono ?>" required>
                                                                                <label class="form-label">Teléfono</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $gestion->actividad ?>" disabled>
                                                                                <label class="form-label">Actividad</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-sm-4">
                                                                        <label for="fecha_cita"><h4><small>Fecha de Cita</small></h4></label>
                                                                        <div class="input-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="date" class="form-control" name="fecha_cita" id="fecha_cita">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label for="id_ips"><h4><small>IPS Asiste</small></h4></label>
                                                                        <select class="form-control show-tick" name='id_ips' id="id_ips" requiered>
                                                                            <option value="">-- Selecciona IPS --</option>
                                                                            <?php 
                                                                                foreach ($centros as $ips) {
                                                                                    ?>
                                                                                        <option value="<?php echo $ips->id_ips ?>"><?php echo $ips->ips ?></option>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label for="id_estado"><h4><small>Estado</small></h4></label>
                                                                        <select class="form-control show-tick" name='id_estado'>
                                                                            <option value="">-- Selecciona Estado --</option>
                                                                            <?php 
                                                                                foreach ($estados as $estado) {
                                                                                    if($estado->id_estado == $gestion->id_estado){
                                                                                        ?>
                                                                                            <option selected value="<?php echo $estado->id_estado ?>"><?php echo $estado->estado ?></option>
                                                                                        <?php
                                                                                    }else{
                                                                                        ?>
                                                                                            <option value="<?php echo $estado->id_estado ?>"><?php echo $estado->estado ?></option>
                                                                                        <?php
                                                                                    }
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="comentario" id="comentario" required>
                                                                                <label class="form-label">Comentario</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer float-right">
                                                                    <a href="?controller=semana&method=more&week=<?php echo $semana[0]->id_semana ?>" type="button" value="Cancelar" class="btn btn-secundary">Cancelar</a>
                                                                    <button class="btn bg-teal waves-effect">Gestionar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php endforeach ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="one">
                                        <?php foreach ($uno as $gestion) : ?>
                                            <form action="?controller=semana&method=update&id=<?php echo $gestion->id_programacion ?>&week=<?php echo $semana[0]->id_semana ?>&user=<?php echo $gestion->id_persona ?>" method="POST">
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">
                                                            <div class="body">
                                                                <h2 class="card-inside-title">Gestión Semanal <?php echo $gestion->paciente ?></h2>
                                                                <div class="row clearfix">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $gestion->documento ?>" disabled>
                                                                                <label class="form-label">Documento</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $gestion->telefono ?>" required>
                                                                                <label class="form-label">Teléfono</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $gestion->actividad ?>" disabled>
                                                                                <label class="form-label">Actividad</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-sm-4">
                                                                        <label for="fecha_cita"><h4><small>Fecha de Cita</small></h4></label>
                                                                        <div class="input-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="date" class="form-control" name="fecha_cita" id="fecha_cita" value="<?php echo $gestion->fecha_asiste ?>" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label for="id_ips"><h4><small>IPS Asiste</small></h4></label>
                                                                        <select class="form-control show-tick" name='id_ips' id="id_ips">
                                                                            <option value="">-- Selecciona IPS --</option>
                                                                                <?php 
                                                                                    foreach ($centros as $ips) {
                                                                                        if($ips->id_ips == $gestion->id_ips){
                                                                                            ?>
                                                                                                <option selected value="<?php echo $ips->id_ips ?>"><?php echo $ips->ips ?></option>
                                                                                            <?php
                                                                                        }else{
                                                                                            ?>
                                                                                                <option value="<?php echo $ips->id_ips ?>"><?php echo $ips->ips ?></option>
                                                                                            <?php
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label for="id_estado"><h4><small>Estado</small></h4></label>
                                                                        <select class="form-control show-tick" name='id_estado' required>
                                                                            <option value="">-- Selecciona Estado --</option>
                                                                            <?php 
                                                                                foreach ($estados as $estado) {
                                                                                    if($estado->id_estado == $gestion->id_estado){
                                                                                        ?>
                                                                                            <option selected value="<?php echo $estado->id_estado ?>"><?php echo $estado->estado ?></option>
                                                                                        <?php
                                                                                    }else{
                                                                                        ?>
                                                                                            <option value="<?php echo $estado->id_estado ?>"><?php echo $estado->estado ?></option>
                                                                                        <?php
                                                                                    }
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="comentario" id="comentario" value="<?php echo $gestion->comentario?>" required>
                                                                                <label class="form-label">Comentario</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer float-right">
                                                                    <a href="?controller=semana&method=more&week=<?php echo $semana[0]->id_semana ?>" type="button" value="Cancelar" class="btn btn-secundary">Cancelar</a>
                                                                    <button class="btn bg-teal waves-effect">Gestionar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php endforeach ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="done">
                                        <?php foreach ($hecho as $gestion) : ?>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card">
                                                        <div class="body">
                                                            <h2 class="card-inside-title">Gestión Semanal <?php echo $gestion->paciente ?></h2>
                                                            <div class="row clearfix">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $gestion->documento ?>" disabled>
                                                                            <label class="form-label">Documento</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $gestion->telefono ?>" required>
                                                                            <label class="form-label">Teléfono</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $gestion->actividad ?>" disabled>
                                                                            <label class="form-label">Actividad</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-sm-4">
                                                                    <label for="fecha_ingreso"><h4><small>Fecha de Cita</small></h4></label>
                                                                    <div class="input-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="date" class="form-control" name="fecha_final" id="fecha_ingreso" value="<?php echo $gestion->fecha_asiste ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label for="id_ips"><h4><small>IPS Asiste</small></h4></label>
                                                                    <select class="form-control show-tick" name='id_ips' id="id_ips" disabled> 
                                                                            <option value="<?php echo $gestion->id_ips ?>"><?php echo $gestion->ips ?></option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label for="id_estado"><h4><small>Estado</small></h4></label>
                                                                    <select class="form-control show-tick" name='id_riesgo' disabled>
                                                                        <option value="">-- Selecciona Estado --</option>
                                                                        <?php 
                                                                            foreach ($estados as $estado) {
                                                                                if($estado->id_estado == $gestion->id_estado){
                                                                                    ?>
                                                                                        <option selected value="<?php echo $estado->id_estado ?>"><?php echo $estado->estado ?></option>
                                                                                    <?php
                                                                                }else{
                                                                                    ?>
                                                                                        <option value="<?php echo $estado->id_estado ?>"><?php echo $estado->estado ?></option>
                                                                                    <?php
                                                                                }
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="comentario" id="comentario" value="<?php echo $gestion->comentario?>" disabled>
                                                                            <label class="form-label">Comentario</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>