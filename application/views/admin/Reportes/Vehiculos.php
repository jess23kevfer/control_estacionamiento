

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Vehiculos
                <small>Lista</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <div class="row">
                    <form action="<?php echo current_url();?>" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label for="" class="col-md-1 control-label">Desde:</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="fechainicio" value="<?php echo !empty($fechainicio) ? $fechainicio:'';?>">
                            </div>
                            <label for="" class="col-md-1 control-label">Hasta:</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="fechafin" value="<?php  echo !empty($fechafin) ? $fechafin:'';?>">
                            </div>
                            <div class="col-md-4">
                                <input type="submit" name="buscar" value="Buscar" class="btn btn-primary">
                                <a href="<?php echo base_url(); ?>reportes/vehiculos" class="btn btn-danger">Restablecer</a>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <hr>
                <div class="row">
                    <div class= "col-md-12">
                        <table id="example2" class= "table table-bordered btn-hover">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Matricula</th>
                                <th>Color</th>
                                <th>Modelo</th>
                                <th>Fecha</th>
                                <th>Tipo</th>
                                <th>Opciones</th>
                                </tr>
                            </thead>
                        <tbody>
                        <?php if(!empty($vehiculos)):?>
                                    <?php foreach($vehiculos as $vehiculo):?>
                                        <tr>
                                            <td><?php echo $vehiculo->id;?></td>
                                            <td><?php echo $vehiculo->matricula;?></td>
                                            <td><?php echo $vehiculo->descripcion;?></td>
                                            <td><?php echo $vehiculo->fecha_entrada;?></td>
                                            <td><?php echo $vehiculo->hora_entrada;?></td>
                                            <?php $datavehiculo = $vehiculo->id."*".$vehiculo->matricula."*".$vehiculo->descripcion."*". $vehiculo->fecha_entrada."*".$vehiculo->hora_entrada;?>
                                            <td>
                                            <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-vehiculo" data-toggle="modal" data-target="#modal-default" value="<?php echo $datavehiculo?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    
                                                </div>
                
                                            </td>
                                        </tr> 
                                    <?php endforeach;?>
                                <?php endif;?>

                                
                            </tbody>
                        
                        </table>
                    
                    </div>
                
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->  

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Info</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
