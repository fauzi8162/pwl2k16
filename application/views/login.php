<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login Admin Rental</title>
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container col-xs-8">
      <h2>Login App. Rental</h2>
      <?php $pesan = $this->session->flashdata('pesan');?>
      <?php if (@$pesan):?>
      <div class="alert alert-danger">
        <strong>Login Salah!</strong> Username atau Password Anda salah!.
      </div>
      <?php endif?>
      <form role="form" class="form-horizontal" action="<?php echo site_url()?>/Login/validasi" method="post">
        <div class="form-group">
          <div class="col-xs-4">
            <label for="username">Username</label>
            <input type="username" class="form-control" placeholder="Username" name='username'>
            </div>
            </div>
            <div class="form-group">
              <div class="col-xs-4">
                <label for="password">Password:</label>
                <input type="password" class="form-control" placeholder="Password" name='password'>
              </div>
            </div>
            <div class="form-group">
            <div class="col-xs-4">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>