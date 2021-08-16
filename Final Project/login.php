<?php
  session_start();
  require_once 'controllers/doctorController.php';
  include 'mainheader.php';
?>

		<form action="" method="post">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5e9d084 (project)
		<fieldset>
      <p align="center">
			<table>
        <tr>
    		<td colspan="2" align="center"><h1><u>Login</u></h1></td>
<<<<<<< HEAD
=======
=======
		<fieldset class="log1">
      <p align="center">
			<table>
        <tr>
    		<td colspan="2" align="center" class="login"><h1><u>Login</u></h1></td>
>>>>>>> ed28973 (project final)
>>>>>>> 5e9d084 (project)
      </tr>
      <tr>
        <td colspan="2" align="center" style="color:red"><?php echo$err_db; ?></td>
      </tr>
      <td></td>
       <tr>
					<td align="right">Username:</td>
					<td><input type="text" name="username" placeholder="Username">  </td>
<<<<<<< HEAD
					<td><span> <?php echo $err_username;?> </span></td>
=======
<<<<<<< HEAD
					<td><span> <?php echo $err_username;?> </span></td>
=======
					<td><span class="log2"> <?php echo $err_username;?> </span></td>
>>>>>>> ed28973 (project final)
>>>>>>> 5e9d084 (project)
				</tr>
				<tr>
					<td align="right">Password:</td>
					<td><input type="password" name="password" placeholder="Password">  </td>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5e9d084 (project)
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
        <td></td><td></td><td></td>
				<tr>
                <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
				<tr>
<<<<<<< HEAD
=======
=======
					<td><span class="log2"> <?php echo $err_password;?> </span></td>
				</tr>
        <td></td><td></td><td></td>
				<tr>
                <td colspan="2" align="center"><input type="submit" class="logsub1" name="login" value="Login"></td>
				</tr>
        <tr colspan="2" align="center">
          <td>forgot password?</td>
          <td onclick="submit()"><a href="resetpass.php">forgot password</a></td>
        </tr>
>>>>>>> ed28973 (project final)
>>>>>>> 5e9d084 (project)
          <td></td><td></td>
          <tr colspan="2" align="center">
            <td>Not registered yet? </td>
            <td><a href="registration.php">Register</a></td>
          </tr>

			</table>
      </p>
		</fieldset>
		</form>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    <script>
        function submit() {
        alert("Please Enter your valid username than you can change your password. Thank you;)");
        }
    </script>
>>>>>>> ed28973 (project final)
>>>>>>> 5e9d084 (project)
	<?php include 'mainfooter.php'; ?>
