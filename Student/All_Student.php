<?php
include 'controllers/StudentController.php';
$students = getStudents();

?>

<html>
<body>
<h3> All Students</h3>

<table>
    <thead>
        <th>Name</th>
        <th>ID</th>
        <th>DOB</th>
        <th>Credit</th>
        <th>CGPA</th>
        <th>Depertment ID</th>
    </thead>

    <tbody>
        <?php
        $i=1;
        foreach($students as $c){
            echo"<tr>";
                echo"<td> $i </td>";
                echo "<td>".$c["name"]."</td>";
		            echo "<td>".$c["dob"]."</td>";
		            echo "<td>".$c["credit"]."</td>";
	              echo "<td>".$c["cgpa"]."</td>";
		            echo "<td>".$c["deptid"]."</td>";
                echo'<td><a href="Edit_Student.php?id='.$c["id"].'">Edit</a></td>';
                echo'<td><a href="">Delete</a></td>';
            echo"</tr>";
            $i++;
        }
        ?>
    </tbody>
</table>
</body>
</html>
