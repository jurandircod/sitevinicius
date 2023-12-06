<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>Prefeitura</b> <br>de umuarama</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Registrar novo usuario</p>

        <form class="myform" action="app/model//users//cadastrar.php" method="post">
          <div class="input-group mb-3">

            <input type="text" class="form-control" name="nome" placeholder="Nome completo">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">

            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <select name="sec" id="" class="form-control" placeholder="setores">
              <option selected>Secretaria responsável</option>
              <option value="RH">Secretaria de administração</option>
              <option value="RH">Secrtária de saúde</option>
              <option value="RH">Secretária dos conselhos</option>
              <option value="RH">RH</option>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-landmark">
                </span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="input-group mb-3 col">
              <input type="tel" class="form-control" name="tel" placeholder="telefone">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-phone">
                  </span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3 col">
              <select name="setor" id="" class="form-control" placeholder="setores">
                <option selected>Seu setor</option>
                <option value="RH"></option>
                <option value="RH">projetos técnicos</option>
                <option value="RH">RH</option>
                <option value="RH">RH</option>
              </select>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-briefcase">
                  </span>
                </div>
              </div>
            </div>

          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control" name="senha" placeholder="Senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="confirm" class="form-control" placeholder="Digite sua senha novamente">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                  Eu aceito os <a href="#">termos</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Registrar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Entrar com Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Entrar com Google+
          </a>
        </div>

        <a href="login.php" class="text-center">Eu já possuo conta</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="public/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="public/dist/js/adminlte.min.js"></script>
  <script src="public/js//inputs//validaderInputs.js"></script>




</body>

</html>