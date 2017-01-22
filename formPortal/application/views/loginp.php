<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>LOG IN</title>
  <!-- <link rel="stylesheet" href="<?php echo $base?>/application/css/style.css" type="text/css"> -->

  <!--  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" /> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
</head>
<body>
    <div style='position: fixed; top: 0; left: 0; width: 100%; height: 50%;background-color:#330099; z-index: -1;'></div>

    <h1 style="color:#FFFFFF; text-align:center; font-weight:bold; font-size:250%;">JOB APPLICATION PORTAL</h1><br>
	<div class="logo" >
  <?php
  $img_prop= array(
    'src'=> 'assets/images/ismd.jpg',
    'width' => '300',
        'height'=> '300'
    );
	echo img($img_prop); ?>
	</div>
  <div class="login-card" >
    
    <h1>Log-in</h1><br>
  <form action="collect_info/get_info" method="post">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="#">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>
<div style='position: absolute; top: 0; left: 0; z-index: 2; width: 100%;'></div>
</body>
</html>