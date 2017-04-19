<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Rekam Medis</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
   <link rel="stylesheet" href="<?php echo (css.'bootstrap/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo (fonts.'css/font-awesome.min.css');?>">
   
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo (css.'AdminLTE.min.css');?>">
  <!-- iCheck -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>REKAM </b> MEDIS</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">
	Silahkan Masukkan Data Anda<br/>
	<!-- <?php
		$msg = str_replace(" ","+",$this->input->get('msg'));
		$msg = $this->encrypt->decode($msg);
		if($msg == 'err'){
			echo '<h6 align="center" style="color:red">Password dan username anda salah</h6>';
		}elseif($msg =='msg'){
			echo '<h6 align="center" style="color:red">Logout sukses</h6>';
		}else{
			echo $this->encrypt->decode($this->input->get('msg'));
		}
	?> -->
    </p>
    <form action="<?php echo base_url('auth/cek_login');?>" method="post">
      <div class="form-group has-feedback">
        <input name="username" type="username" class="form-control" placeholder="Username" required=1>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password" required=1>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="<?php echo (plugins.'jQuery/jQuery-2.2.0.min.js');?>"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo (bootstrap.'js/bootstrap.min.js');?>"></script>
<!-- iCheck -->
<script src="<?php echo (plugins.'iCheck/icheck.min.js');?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>