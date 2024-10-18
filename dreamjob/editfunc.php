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
	<?php $getApplicantByID = getApplicantByID($pdo, $_GET['applicantID']); ?>
	<form action="core/handleForms.php" method="POST">
        <input type="hidden" name="applicantID" value="<?php echo $getApplicantByID['applicantID']; ?>">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getApplicantByID['firstName']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getApplicantByID['lastName']; ?>">
		</p>
		<p>
			<label for="sex">Sex</label>
			<input type="text" name="sex" value="<?php echo $getApplicantByID['sex']; ?>">
		</p>
		<p>
			<label for="bDate">Birthdate</label>
			<input type="text" name="bDate" value="<?php echo $getApplicantByID['bDate']; ?>">
		</p>
		<p>
			<label for="address">Address</label>
			<input type="text" name="address" value="<?php echo $getApplicantByID['address']; ?>">
		</p>
		<p>
			<label for="proficiency">Proficiency</label>
			<input type="text" name="proficiency" value="<?php echo $getApplicantByID['proficiency']; ?>"></p>
		<p>
			<label for="nationality">Nationality</label>
			<input type="text" name="nationality" value="<?php echo $getApplicantByID['nationality']; ?>">
			<input type="submit" name="edit_btn">
		</p>
	</form>
</body>
</html>