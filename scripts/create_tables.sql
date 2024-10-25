-- Create the contacts table
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,           -- Changed from first_name to name
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15),                     -- Changed from phone_number to phone
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create the institutions table
CREATE TABLE institutions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255),
    phone VARCHAR(15),                     -- Changed from phone_number to phone
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
