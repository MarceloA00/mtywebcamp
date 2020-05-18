<?php include 'templates/admin-header.php'; ?>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <p><b>Admin</b>LTE</p>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Llenar datos para inciar sesion</p>

        <form action="#" id="formulario" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="usuario" placeholder="Usuario" maxlength="50">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" id="password" placeholder="Contraseña" maxlength="50">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <input type="hidden" id="accion" value="login">
              <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="js/adminlte.min.js"></script>
  <!-- Sweetalert 2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <!-- Formulario -->
  <script src="js/form.js"></script>

</body>

</html>