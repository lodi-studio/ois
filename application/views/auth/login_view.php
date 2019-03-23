<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo 'OIS - Login';?></title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('asset/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('asset/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('asset/css/sb-admin.css')?>" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">

            <?php

            $flashdata_username = '';

            if ($this->session->flashdata('err_msg') != null) :
                $flashdata_username = $this->session->flashdata('username');
            ?>

                <div class="alert alert-danger">
                  <strong>Failed!</strong> <?php echo $this->session->flashdata('err_msg');?>
                </div>

            <?php endif;?>

          <form method="post" action="<?php echo base_url('auth/login');?>">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" value="<?php echo $flashdata_username;?>" required autofocus>
                <label for="inputEmail">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" name="login" value="Login">
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('asset/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('asset/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  </body>

</html>
