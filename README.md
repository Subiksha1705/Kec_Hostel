# Hostel Management System

A web-based platform designed to manage hostel operations at **Kongu Engineering College (KEC)**. It provides essential features like student pass applications, complaint management, and an admin dashboard for monitoring.

## Features

- **Pass Apply:** Students can apply for gate passes and track approval status.
- **Student Inconvenience Portal:** Submit complaints regarding hostel facilities.
- **Admin Dashboard:** Monitor student data, complaints, and view pass requests.
- **Guest Page:** Provides basic information about hostel facilities and rules.

## Tech Stack

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Server:** Apache (via XAMPP)

## Prerequisites

- XAMPP installed on your system.
- Basic knowledge of PHP and MySQL.

## Installation

1. Install **XAMPP** from [Apache Friends](https://www.apachefriends.org/index.html).

2. Start **Apache** and **MySQL** using the XAMPP Control Panel.

3. Clone the repository and move it to the `htdocs` directory inside your XAMPP installation:
    ```bash
    git clone https://github.com/your-username/hostel-management.git
    cd hostel-management
    ```

4. Import the database using **phpMyAdmin**:
    - Open `http://localhost/phpmyadmin` in your browser.
    - Create a new database named `hostel_management`.
    - Import the `hostel_management.sql` file from the project folder.

5. Configure database connection in the `config.php` file:
    ```php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'hostel_management';
    ```

6. Access the application at `http://localhost/hostel-management`

## Usage

- **Students:** Apply for passes and report inconveniences.
- **Admins:** View dashboards, monitor student data, and manage complaints.
- **Guests:** Access general hostel information.

## Troubleshooting

- Ensure **Apache** and **MySQL** are running in the XAMPP Control Panel.
- Verify that the database is correctly imported in **phpMyAdmin**.
- Check `config.php` for correct database credentials.
