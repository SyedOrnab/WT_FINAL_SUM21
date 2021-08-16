<?php include 'controllers/Usercontrollers.php'; ?>
<html>
	<head><title>Login</title></head>
	<h5><?php echo $err_db;?></h5>

	<body>
		<form action="" method="post">
		<h1>Login</h1>    
	       	<p>Name:<input type="text" name="name" value="<?php echo $name; ?>">
		      <span> <?php echo $err_name;?> </span></p>
					<p>Username:<input type="text" name="uname" value="<?php echo $uname; ?>">
					<span> <?php echo $err_uname;?> </span></p>
					<p>Password:<input type="password" name="password" value="<?php echo $password ?>">
					<span> <?php echo $err_password;?> </span></p>
          <p><input type="submit" name="btn_login" value="Login"></p>
		</form>
	</body>
</html>
