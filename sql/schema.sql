CREATE TABLE NetworkEngineerRegistration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email_address VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20),
    certifications VARCHAR(255),
    networking_skills VARCHAR(255),
    years_in_industry VARCHAR(255),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
