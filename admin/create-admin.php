<?php include 'templates/admin-header.php'; ?>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <?php
    include 'templates/admin-barra.php';
    include 'templates/sidebar.php';
    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Administradores</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Crear Admin</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Crear nuevo usuario administrador</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="#" id="formulario" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nombre de Usuario</label>
                      <input type="text" class="form-control" id="usuario" maxlength="50">
                    </div>
                    <div class="form-group">
                      <label>Contraseña de Usuario</label>
                      <input type="text" class="form-control" id="password" maxlength="50">
                    </div>
                  </div>
                  <div class="card-footer">
                    <input type="hidden" id="accion" value="crear">
                    <button type="submit" class="btn btn-primary">Crear</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include 'templates/admin-footer.php';
    ?>