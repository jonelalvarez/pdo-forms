CREATE TABLE applicant (
    applicantID INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR (50),
    lastName VARCHAR (50),
    sex INT (50),
    bDate DATE,
    email VARCHAR (255),
    address VARCHAR (255),
    proficiency VARCHAR (255),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

