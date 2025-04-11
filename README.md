# 🌐 Simple PHP WebApp with Bootstrap, Database Connection, Login & Signup

This repository contains a beginner-friendly project demonstrating how to:
1. Use Bootstrap CSS/JS in HTML
2. Connect front-end HTML to a MySQL database via PHP
3. Implement a login screen using PHP sessions
4. Create a user sign-up screen with form handling and database insertion


## 📌 Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/simple-php-webapp.git
cd simple-php-webapp


### 2. Set up Database
Open phpMyAdmin
Create a new database: webapp_db
Create a table: users
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255)
);


### 3. In php file:
$conn = mysqli_connect("localhost", "root", "", "webapp_db");

4. Run the Project
Place the files in your XAMPP/LAMP htdocs folder

Start Apache & MySQL

Visit http://localhost/simple-php-webapp/index.html


### 📚 Tutorials Covered
✅ Using Bootstrap 5 in HTML

✅ PHP + MySQL Database connection

✅ PHP Sessions and Login Auth

✅ HTML Form to MySQL Insert

📧 Contact
For any queries, reach out at: [tahir@acharya.ac.in]
