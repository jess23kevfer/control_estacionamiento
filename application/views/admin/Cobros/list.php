

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Cobros
                <small>Salida</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <div class="row">
                    <div class="col-md-12">
                    </div>
                <div class="row">
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
                                <th>Matricula</th>
                                <th>Descripcion</th>
                                <th>Fecha Entrada</th>
                                <th>Hora Entrada</th>
                                <th>Fecha Salida</th>
                                <th>Hora Salida</th>
                            
                                </tr>
                            </thead>
                        <tbody>
                        <?php if(!empty($cobros)):?>
                                    <?php foreach($cobros as $cobro):?>
                                        <tr>
                                            <td><?php echo $cobro->id;?></td>
                                            <td><?php echo $cobro->vehiculo;?></td>
                                            <td><?php echo $cobro->descripcion;?></td>
                                            <td><?php echo $cobro->fecha_entrada;?></td>
                                            <td><?php echo $cobro->hora_entrada;?></td>
                                            <td><?php echo $cobro->fecha_salida;?></td>
                                            <td><?php echo $cobro->hora_salida;?></td>
                                            <td>
                                            <td>
                                            <div class="btn-group">
                                                    </button>
                                                    <a href="#" class="btn btn-info"><span class="fa fa-print"></span></a>
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
