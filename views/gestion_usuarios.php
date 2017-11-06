<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Panel de Control <small>Gestion de usuarios </small>
                        </h1>
                        
                        <ul class="nav nav-tabs">
                          <li role="presentation" class="active"><a href="index.php?m=gestion_usuarios">Registrar Usuarios</a></li>
                          <li role="presentation"><a href="index.php?m=editar_usuarios">Editar Usuarios</a></li>
                          <li role="presentation"><a href="index.php?m=eliminar_usuarios">Eliminar Usuarios</a></li>
                          <li role="presentation"><a href="index.php?m=ver_usuarios">Usuarios Registrados</a></li>
                        </ul>
                        <hr>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i> Registrar Usuarios
                            </li>
                        </ol>
                        <div class="container">   
                            <div class="col-md-8">
                                <div class="form-horizontal" style="">
                                    <form action="index.php?m=guardar_usuarios" method="post">
                                        <div class="form-group">
                                        <label for="txt_nom_usu" class="col-sm-2 control-label">Nombre de usuario:</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="txt_nom_usu" placeholder="Nombre de usuario" required="">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="txt_pass" class="col-sm-2 control-label">Contraseña:</label>
                                        <div class="col-sm-10">
                                          <input type="password" class="form-control" name="txt_pass" placeholder="Contraseña" required="">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="txt_nombres" class="col-sm-2 control-label">Nombre:</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="txt_nombres" placeholder="Nombres" required="">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="txt_apellidos" class="col-sm-2 control-label">Apellidos:</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="txt_apellidos" placeholder="Apellidos" required="" >
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="txt_identificacion" class="col-sm-2 control-label">Identificacion:</label>
                                        <div class="col-sm-10">
                                          <input type="number" class="form-control" name="txt_identificacion" placeholder="Numero de identificacion" required="" >
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="txt_telefono" class="col-sm-2 control-label">Telefono:</label>
                                        <div class="col-sm-10">
                                          <input type="number" class="form-control" name="txt_telefono" placeholder="Telefono" required="" >
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="txt_dir" class="col-sm-2 control-label">Dirección:</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="txt_dir" placeholder="Dirección" required="" >
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" class="btn btn-primary">Registrar</button>
                                        </div>
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>