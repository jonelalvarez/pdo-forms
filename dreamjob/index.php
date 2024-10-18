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
	<h3>Welcome to Software Engineering Application. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="sex">Sex</label> <input type="text" name="sex"></p>
		<p><label for="bDate">Birthdate</label> <input type="text" name="bDate"></p>
		<p><label for="address">Address</label> <input type="text" name="address"></p>
		<p><label for="proficiency">Proficiency</label> <input type="text" name="proficiency"></p>
		<p><label for="nationality">Nationality</label> <input type="text" name="nationality">
			<input type="submit" name="submit_btn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Applicant ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Sex</th>
	    <th>Birthdate</th>
	    <th>Address</th>
	    <th>Proficiency</th>
	    <th>Nationality</th>
	    <th>Action</th>
	  </tr>

	  <?php $applicantRecords = applicantRecords($pdo); ?>
	  <?php foreach ($applicantRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['applicantID']; ?></td>
	  	<td><?php echo $row['firstName']; ?></td>
	  	<td><?php echo $row['lastName']; ?></td>
	  	<td><?php echo $row['sex']; ?></td>
	  	<td><?php echo $row['bDate']; ?></td>
	  	<td><?php echo $row['address']; ?></td>
	  	<td><?php echo $row['proficiency']; ?></td>
	  	<td><?php echo $row['nationality']; ?></td>
	  	<td>
	  		<a href="editfunc.php?applicantID=<?php echo $row['applicantID'];?>">Edit</a>
	  		<a href="deletefunc.php?applicantID=<?php echo $row['applicantID'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>