CREATE TABLE applicant_tbl (
    applicantID INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR (50),
    lastName VARCHAR (50),
    sex VARCHAR (50),
    bDate DATE (50),
    address VARCHAR (250),
    proficiency VARCHAR (50),
    nationality VARCHAR (50),
    dateAdded TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);