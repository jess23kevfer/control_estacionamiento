

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Empresas
                <small>Lista</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <a href="<?php echo base_url();?>mantenimiento/configuraciones/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Empresa</a>
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
                        <table id="example1" class= "table table-bordered btn-hover">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Empresa</th>
                                <th>RUC</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Opciones</th>
                                </tr>
                            </thead>
                        <tbody>
                        <?php if(!empty($configuraciones)):?>
                                    <?php foreach($configuraciones as $configuracion):?>
                                        <tr>
                                            <td><?php echo $configuracion->id;?></td>
                                            <td><?php echo $configuracion->nombre;?></td>
                                            <td><?php echo $configuracion->ruc;?></td>
                                            <td><?php echo $configuracion->direccion;?></td>
                                            <td><?php echo $configuracion->telefono;?></td>
                                            <?php $dataconfiguracion = $configuracion->id."*".$configuracion->nombre."*".$configuracion->ruc."*". $configuracion->direccion."*".$configuracion->telefono;?>
                                            <td>
                                            <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-configuracion" data-toggle="modal" data-target="#modal-default" value="<?php echo $dataconfiguracion?>">
                                                        <span class="fa fa-search"></span>
                                                       
                                                    </button>
                                                    <a href="<?php echo base_url()?>mantenimiento/configuraciones/edit/<?php echo $configuracion->id;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>mantenimiento/configuraciones/delete/<?php echo $configuracion->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                    
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
