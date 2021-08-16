<?php
  require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$confirmpassword="";
	$err_confirmpassword="";
  $birthdate = "";
  $err_birthdate = "";
  $birthmonth = "";
  $err_birthmonth = "";
  $birthyear = "";
  $err_birthyear = "";
	$gender="";
	$err_gender="";
  $email = "";
  $err_email = "";
  $phone = "";
  $err_phone = "";
  $gender = "";
  $address = "";
  $err_address = "";
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
  $degree = "";
  $err_degree = "";
>>>>>>> ed28973 (project final)
>>>>>>> 5e9d084 (project)
  $err_db = "";
	$hasError=false;

	if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"])<= 4)
	{
		$hasError = true;
		$err_name = "Name must be greater than 4 characters";
	}
		else{
			$name = $_POST["name"];
		}
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="Username Required";
		}
		else if(strlen($_POST["username"])<= 5)
	{
		$hasError = true;
		$err_username = "User Name must be greater than 5 characters";
	}
		else{
			$username = $_POST["username"];
		}
    if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		else{
			$password = $_POST["password"];
		}

    if(empty($_POST["confirmpassword"])){
			$hasError = true;
			$err_confirmpassword="Password Required";
		}
		else if ($_POST["password"]!=$_POST["confirmpassword"]) {
			$hasError=true;
			$err_confirmpassword="incorrect password";
		}
		else{
			$confirmpassword = $_POST["confirmpassword"];
		}
    if (!isset($_POST["birthdate"])){
			$hasError = true;
			$err_birthdate="Date Required";
		}
		else{
			$birthdate = $_POST["birthdate"];
		}
    if (!isset($_POST["birthmonth"])){
			$hasError = true;
			$err_birthmonth="Month Required";
		}
		else{
			$birthmonth = $_POST["birthmonth"];
		}
    if (!isset($_POST["birthyear"])){
			$hasError = true;
			$err_birthyear="Year Required";
		}
		else{
			$birthyear = $_POST["birthyear"];
		}
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
    if(empty($_POST["email"])){
			$hasError = true;
			$err_email="Email Required";
		}
		else if( strpos($_POST["email"],"@") ){
				$email =($_POST["email"]);
}
		else{
				$hasError = true;
	$err_email ="Email should have @ ";
}

    if(empty($_POST["phone"])){
			$hasError = true;
			$err_phone="Phone Required";
		}
		else if(strlen($_POST["phone"]) >= 12)
	{
		$hasError = true;
		$err_phone = "Phone number must be lower than or equal 12 digits";
	}
		else{
			$phone = $_POST["phone"];
		}
    if(empty($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		}
		else{
			$address = $_POST["address"];
		}
<<<<<<< HEAD
    if(!$hasError){
			$rs = insertDoctor($name,$username,$password,$confirmpassword,$birthdate,$birthmonth,$birthyear,$gender,$email,$phone,$address);
=======
<<<<<<< HEAD
    if(!$hasError){
			$rs = insertDoctor($name,$username,$password,$confirmpassword,$birthdate,$birthmonth,$birthyear,$gender,$email,$phone,$address);
=======
    if(empty($_POST["degree"])){
			$hasError = true;
			$err_degree="Doctor Degree Required";
		}
    else {
      $degree = $_POST["degree"];
    }
    if(!$hasError){
			$rs = insertDoctor($name,$username,$password,$confirmpassword,$birthdate,$birthmonth,$birthyear,$gender,$email,$phone,$address,$degree);
>>>>>>> ed28973 (project final)
>>>>>>> 5e9d084 (project)
			if($rs === true)
			{
				header("Location: login.php");
			}
			$err_db = $rs;
			}
		}
		else if (isset($_POST["login"])){
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username = "Username Required";
		}
		else{
			$username = $_POST["username"];
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password = "Password Required";
		}
		else{
			$password = $_POST["password"];
		}
		$doctors = array($username => $password);
		if(!$hasError){
			if(authenticateDoctor($username,$password)){
				$_SESSION["loggeddoc"] = $username;
				header("Location: doctorDetails.php");
			}
			$err_db = "username password invalid";
		}

	}
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5e9d084 (project)


    function insertDoctor($name,$username,$password,$confirmpassword,$birthdate,$birthmonth,$birthyear,$gender,$email,$phone,$address){
		$query = "insert into docreg values (NULL,'$name','$username','$password','$confirmpassword','$birthdate','$birthmonth','$birthyear','$gender','$email','$phone','$address')";
<<<<<<< HEAD
=======
=======
  elseif (isset($_POST["nextstep"])) {
    if(empty($_POST["username"])){
      $hasError = true;
      $err_username="Username Required";
    }
    else if(strlen($_POST["username"])<= 5)
  {
    $hasError = true;
    $err_username = "User Name must be greater than 5 characters";
  }
    else{
      $username = $_POST["username"];
    }
    if(!$hasError){
			if(authenticateUser($username)){
				$_SESSION["loggeddoc"] = $username;
				header("Location: resetpassuser.php");
			}
			$err_db = "username invalid";
		}

  }

  elseif (isset($_POST["reset"])) {
    $rs = resetpassword($_POST["password"], $_POST["username"],$_POST["confirmpassword"]);
    if($rs === true){
      header("Location: login.php");
    }
    $err_db = $rs;

  }
  elseif (isset($_POST["update_profile"])) {
    $rs = updateProfile($_POST["name"], $_POST["id"]);
    if($rs === true){
      header("Location: RegStatus.php");
    }
    $err_db = $rs;
  }


    function insertDoctor($name,$username,$password,$confirmpassword,$birthdate,$birthmonth,$birthyear,$gender,$email,$phone,$address,$degree){
		$query = "insert into docreg values (NULL,'$name','$username','$password','$confirmpassword','$birthdate','$birthmonth','$birthyear','$gender','$email','$phone','$address','$degree')";
>>>>>>> ed28973 (project final)
>>>>>>> 5e9d084 (project)
		return execute($query);

	}
		function getAllDoctor(){
		$query = "select * from docreg";
		$rs = get($query);
		return $rs;
	}
		function authenticateDoctor($username,$password){
			$query = "select * from docreg where username='$username' and password='$password'";
			$rs = get($query);
			if(count($rs)>0){
				return true;
			}
			return false;

		}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    function getupdateProfile($id)
    {
      $query = "select * from docreg where id =$id";
      $rs = get($query);
  		return $rs[0];
    }
    function updateProfile($name, $id)
    {
      $query="update docreg set name='$name' where id=$id";
      return execute($query);
    }
    function resetpassword($password, $username,$confirmpassword)
    {
      $query="update docreg set password='$password',confirmpassword='$confirmpassword' where username='$username'";
      return execute($query);
    }
    function authenticateUser($username){
			$query = "select * from docreg where username='$username'";
			$rs = get($query);
			if(count($rs)>0){
				return true;
			}
			return false;

		}
    function checkUsername($username){
      $query="select name from docreg where username='$username'";
      $rs = get($query);
      if(count($rs)>0){
				return true;
			}
			return false;
    }
>>>>>>> ed28973 (project final)
>>>>>>> 5e9d084 (project)




?>
