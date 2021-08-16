<?php
    require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$dob="";
	$err_dob="";
	$credit="";
	$err_credit="";
	$cgpa="";
	$err_cgpa="";
	$deptid="";
	$err_deptid="";

	$hasError=false;
	$err_db="";

	if(isset($_POST["add_student"])){

		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}

		else{
			$name =$_POST["name"];

		}
		if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob="DOB Required";
		}

		else{
			$dob =$_POST["dob"];

		}
		if(empty($_POST["credit"])){
			$hasError = true;
			$err_credit="Credit Required";
		}

		else{
			$credit =$_POST["credit"];

		}
		if(empty($_POST["cgpa"])){
			$hasError = true;
			$err_cgpa="CGPA Required";
		}

		else{
			$cgpa =$_POST["cgpa"];

		}
		if(empty($_POST["deptid"])){
			$hasError = true;
			$err_deptid="Department Required";
		}

		else{
			$deptid =$_POST["deptid"];

		}


		if(!$hasError){

		$rs = insertStudent($name,$dob,$credit,$cgpa,$dept_id);
		if ($rs === true){
			header("Location: All_Student.php");
		}
		$err_db = $rs;
	}
		}
		elseif(isset($_POST["edit_student"])){

		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}

		else{
			$name =$_POST["name"];

		}
		if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob="Date of birth Required";
		}

		else{
			$dob =$_POST["dob"];

		}
		if(empty($_POST["credit"])){
			$hasError = true;
			$err_credit="Credit Required";
		}

		else{
			$credit =$_POST["credit"];

		}
		if(empty($_POST["cgpa"])){
			$hasError = true;
			$err_cgpa="CGPA Required";
		}

		else{
			$cgpa =$_POST["cgpa"];

		}
		if(empty($_POST["deptid"])){
			$hasError = true;
			$err_deptid="Department Required";
		}

		else{
			$deptid =$_POST["deptid"];

		}
		if(!$hasError){

		$rs = editStudent($name,$dob,$credit,$cgpa,$dept_id,$_POST["id"]);
		if($rs === true){
			header("Location: All_Student.php");
		}
		$err_db = $rs;
		}

	}

	function insertStudent($name,$dob,$credit,$cgpa,$deptid){
		$query = "insert into students values (NULL,'$name','$dob',$credit,'$cgpa',$deptid)";
		return execute($query);
	}
	function getStudents(){
		$query ="select s.*,d.name as 'd_name' from students c left join departments d on c.deptid = d.id";
		$rs = get($query);
		return $rs;
	}
	function getStudent($id){
		$query = "select * from students where id = $id";
		$rs = get($query);
		return $rs[0];

	}
	function editStudent($name,$dob,$credit,$cgpa,$deptid,$id){
		$query ="update students set name='$name',dob='$dob',credit=$credit,cgpa=$cgpa,dept_id=$deptid where id = $id";
		return execute($query);
	}

?>
