<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['submit_btn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$sex = trim($_POST['sex']);
	$bDate = trim($_POST['bDate']);
	$address = trim($_POST['address']);
	$proficiency = trim($_POST['proficiency']);
	$nationality = trim($_POST['nationality']);

	if (!empty($firstName) && !empty($lastName) && !empty($sex) && !empty($bDate) && !empty($address)  && !empty($address)  && !empty($proficiency) && !empty($nationality)) {
			$query = insertApplicant($pdo, $firstName, $lastName, 
			$sex, $bDate, $address, $proficiency, $nationality);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['edit_btn'])) {
	$applicantID = $_POST['applicantID'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$sex = trim($_POST['sex']);
	$bDate = trim($_POST['bDate']);
	$address = trim($_POST['address']);
	$proficiency = trim($_POST['proficiency']);
	$nationality = trim($_POST['nationality']);

	if (!empty($applicantID) && !empty($firstName) && !empty($lastName) && !empty($sex) && !empty($bDate) && !empty($address) && !empty($proficiency) && !empty($nationality)) {

		$query = updateApplicant($pdo, $applicantID, $firstName, $lastName, $sex, $bDate, $address, $proficiency, $nationality);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['delete_btn'])) {

	$query = deleteApplicant($pdo, $_GET['applicantID']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>