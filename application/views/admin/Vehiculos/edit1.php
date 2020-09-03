
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Vehiculos
        <small>Editar</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>mantenimiento/vehiculos/update1" method="POST">
                            <input type="hidden" value="<?php echo $vehiculo->id;?>" name="idVehiculo">
                            <div class="form-group">
                                <label for="matricula">Matricula:</label>
                                <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo $vehiculo->matricula?>">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion:</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $vehiculo->descripcion?>" >
                            </div>
                            <div class="form-group">
                                <label for="fecha_entrada">Fecha Entrada:</label>
                                <input type="text"  class="form-control" id="fecha_entrada" name="fecha_entrada" value="<?php echo $vehiculo->fecha_entrada;?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="fecha_salida">Fecha Salida:</label>
                                <input type="text"  class="form-control" id="fecha_salida" name="fecha_salida" value="<?php echo date("Y-m-d");?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="hora_salida">Hora salida:</label>
                                <input type="text"  class="form-control" id="hora_salida" name="hora_salida" value="<?php echo date("H:i:s");?>" readonly>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
