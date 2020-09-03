

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Usuarios
                <small>Lista</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>mantenimiento/usuarios/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Usuarios</a>
                    </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <hr>
                <div class="row">
                    <div class= "col-md-12">
                        <table id="example" class= "table table-bordered btn-hover">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Username</th>
                                <th>Opciones</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php if (!empty($usuarios)):?>
                                    <?php foreach($usuarios as $usuario):?>
                                        <tr>
                                            <td><?php echo $usuario->id;?></td>
                                            <td><?php echo $usuario->nombres;?></td>
                                            <td><?php echo $usuario->apellidos;?></td>
                                            <td><?php echo $usuario->username;?></td>
                                            <td>
                                                <div class= "btn-group">
                                                    <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $usuario->id;?>">
                                                    <span class="fa fa-search"></span> </button>
                                                    <a href="<?php echo base_url()?>mantenimiento/usuarios/edit/<?php echo $usuario->id;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>mantenimiento/usuarios/delete/<?php echo $usuario->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                    </span></a>
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
