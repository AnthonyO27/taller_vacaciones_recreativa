<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Panel de Control <small>Usuarios Registrados </small>
                        </h1>
                        <ul class="nav nav-tabs">
                          <li role="presentation" ><a href="index.php?m=gestion_usuarios">Registrar Usuarios</a></li>
                          <li role="presentation"><a href="index.php?m=editar_usuarios">Editar Usuarios</a></li>
                          <li role="presentation"><a href="index.php?m=eliminar_usuarios">Eliminar Usuarios</a></li>
                          <li role="presentation" class="active"><a href="index.php?m=ver_usuarios">Usuarios Registrados</a></li>
                        </ul>
                        <hr>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i> Usuarios Registrados
                            </li>
                        </ol>

                        <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre_Usuarios</th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                                <th>identificación</th>
                                                <th>Telefono</th>
                                                <th>direccion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                           <?php foreach ($query as $data):?>
                                            <tr>
                                                <td><?php echo $data['id'] ?></td>
                                                <td><?php echo $data['nombreusu'] ?></td>
                                                <td><?php echo $data['nombre'] ?></td>
                                                <td><?php echo $data['apellido'] ?></td>
                                                <td><?php echo $data['identificacion'] ?></td>
                                                <td><?php echo $data['telefono'] ?></td>
                                                <td><?php echo $data['direccion'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                        </div>

                         

                        


                    </div>
                </div>


                <!-- /.row -->

                

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>