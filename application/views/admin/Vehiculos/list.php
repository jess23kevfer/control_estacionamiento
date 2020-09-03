

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Vehiculos Estacionados
                <small></small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <div class="row">
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
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                        </div>
                <hr>
                <div class="row">
                    <div class= "col-md-12">
                        <table id="example" class= "table table-bordered btn-hover">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Matricula</th>
                                <th>Descripcion</th>
                                <th>Fecha Entrada</th>
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
                                            <?php $datavehiculo = $vehiculo->id."*".$vehiculo->matricula."*".$vehiculo->descripcion."*".$vehiculo->fecha_entrada."*".$vehiculo->fecha_salida."*".$vehiculo->hora_salida;?>
                                            <td>
                                            <div class="btn-group">
                                                    </button>
                                                    <a href="<?php echo base_url()?>mantenimiento/vehiculos/edit1/<?php echo $vehiculo->id;?>" class="btn btn-info"><span class="fa fa-check"></span></a>
                                                    <a href="<?php echo base_url()?>mantenimiento/vehiculos/edit/<?php echo $vehiculo->id;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>mantenimiento/vehiculos/delete/<?php echo $vehiculo->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
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
