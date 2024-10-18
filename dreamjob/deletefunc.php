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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getApplicantByID = getApplicantByID($pdo, $_GET['applicantID']); ?>
	<form action="core/handleForms.php?applicantID=<?php echo $_GET['applicantID']; ?>" method="POST">

		<div class="recordContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getApplicantByID['firstName']; ?></p>
			<p>Last Name: <?php echo $getApplicantByID['lastName']; ?></p>
			<p>Sex: <?php echo $getApplicantByID['sex']; ?></p>
			<p>Birthdate: <?php echo $getApplicantByID['bDate']; ?></p>
			<p>Address: <?php echo $getApplicantByID['address']; ?></p>
			<p>Proficiency: <?php echo $getApplicantByID['proficiency']; ?></p>
			<p>Nationality: <?php echo $getApplicantByID['nationality']; ?></p>
			<input type="submit" name="delete_btn" value="Delete">
		</div>
	</form>
</body>
</html>