<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertApplicant($pdo,$firstName, $lastName, $sex, $bDate, $address, $proficiency, $nationality) {

	$sql = "INSERT INTO applicant_tbl (firstName,lastName,sex,bDate,address,proficiency,nationality) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$firstName, $lastName, $sex, $bDate, 
		$address, $proficiency, $nationality]);

	if ($executeQuery) {
		return true;	
	}
}

function applicantRecords($pdo) {
	$sql = "SELECT * FROM applicant_tbl";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getApplicantByID($pdo, $applicantID) {
	$sql = "SELECT * FROM applicant_tbl WHERE applicantID = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$applicantID])) {
		return $stmt->fetch();
	}
}

function updateApplicant($pdo, $applicantID, $firstName, $lastName, 
	$sex, $bDate, $address, $proficiency, $nationality) {

	$sql = "UPDATE applicant_tbl 
				SET firstName = ?, 
					lastName = ?, 
					sex = ?, 
					bDate = ?, 
					address = ?, 
					proficiency = ?, 
					nationality = ? 
			WHERE applicantID = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$firstName, $lastName, $sex, 
		$bDate, $address, $proficiency, $nationality, $applicantID]);

	if ($executeQuery) {
		return true;
	}
}



function deleteApplicant($pdo, $applicantID) {

	$sql = "DELETE FROM applicant_tbl WHERE applicantID = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$applicantID]);

	if ($executeQuery) {
		return true;
	}

}




?>