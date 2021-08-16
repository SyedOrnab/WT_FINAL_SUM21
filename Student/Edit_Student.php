<?php
require_once 'controllers/StudentController.php';
require_once 'controllers/DepartmentControl.php';
 $depart=Department();
$id = $_GET["id"];
$c = getStudent($id);

?>

<html>
<h5><?php echo $err_db; ?></h5>
  <body>
    <form  method="post" action="">
    <table>
			<h3>Edit Student</h3>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $c["name"]; ?>"></td>
					<td><span> <?php echo $err_name;?> </span></td>


				</tr>
				<tr>
				  <td>Date of Birth:</td>
					<td><input type="text" name="dob" value="<?php echo $dob; ?>"></td>
					<td><span><?php echo $err_dob;?></span></td>
				</tr>
				<tr>
					<td>Credit:</td>
					<td><input type="text" name="credit"  value="<?php echo $credit;?>"></td>
					<td><span><?php echo $err_credit;?></span></td>
				</tr>
				<tr>
					<td>CGPA:</td>
					<td><input type="text" name="cgpa" value="<?php echo $cgpa;?>"></td>
					<td><span><?php echo $err_cgpa;?></span></td>
				</tr>

				<tr>
				  <td>Deparment:</td>
					<td><select name="deptid" value="<?php echo $deptid;?>">
					<option selected disabled>Choose Deparment</option>
					<?php
					  foreach($depart as $d){
						echo "<option value='".$d["id"]."'>".$d["name"]."</option>";
					}
					?>
					</select>
					</td>
					<td><span> <?php echo $err_deptid;?> </span></td>
				</tr>


				<tr>
					<td colspan="2" align="right"><input type="submit" name="edit_student" value="Edit Student"></td>
				</tr>
				</table>
      </form>
  </body>
</html>
