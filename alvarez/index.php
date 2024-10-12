<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h3>Welcome to the Software Engineering Registration Form. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="sex">Sex</label> <input type="text" name="sex"></p>
		<p><label for="bDate">Birthdate</label> <input type="date" name="bDate"></p>
		<p><label for="email">Email</label> <input type="text" name="email"></p>
		<p><label for="address">Address</label> <input type="text" name="address"></p>
		<p><label for="proficiency">Proficiency</label> <input type="text" name="proficiency">
			<input type="submit" name="insertNewStudentBtn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Applicant ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Sex</th>
	    <th>Email</th>
	    <th><Address></Address></th>
	    <th>Proficiency</th>
	    <th>Date Added</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAllStudentRecords = seeAllStudentRecords($pdo); ?>
	  <?php foreach ($seeAllStudentRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['student_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['']; ?></td>
	  	<td><?php echo $row['year_level']; ?></td>
	  	<td><?php echo $row['section']; ?></td>
	  	<td><?php echo $row['adviser']; ?></td>
	  	<td><?php echo $row['religion']; ?></td>
	  	<td>
	  		<a href="editstudent.php?student_id=<?php echo $row['student_id'];?>">Edit</a>
	  		<a href="deletestudent.php?student_id=<?php echo $row['student_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>