Adv-APP - Web Application

Project Overview

This repository contains the source code for the CPS Advocacia web application, a dynamic platform designed to showcase legal services. The application is built with a focus on a clear separation of concerns, utilizing a custom MVC-like architecture to manage content, user interactions, and administrative functionalities. It serves as a portfolio piece demonstrating proficiency in backend development with PHP, frontend integration, and database management.

Technical Stack

The project leverages a traditional web development stack, combining server-side scripting with client-side technologies and a relational database management system.

Category
Technology
Description
Backend
PHP
Core server-side scripting language for logic, routing, and database interaction.
Frontend
HTML
Standard markup language for structuring web pages.


CSS
Styling language (style.css) for visual presentation.


JavaScript
Client-side scripting (script.js) for interactive elements and dynamic content.
Database
MySQL
Relational database management system for storing application data, including users, contacts, and blog posts.




Project Structure

The application follows a modular directory structure, promoting maintainability and scalability:

Plain Text


. 
├── app/
│   ├── controllers/      # Handles application logic and data processing
│   │   ├── AdminController.php
│   │   ├── AuthController.php
│   │   └── HomeController.php
│   └── views/            # Contains all presentation logic (HTML templates)
│       ├── admin/
│       │   └── dashboard.php
│       ├── layouts/      # Reusable header and footer components
│       │   ├── footer.php
│       │   └── header.php
│       └── pages/        # Specific page templates
│           ├── blog.php
│           ├── contato.php
│           ├── home.php
│           ├── login.php
│           ├── portfolio.php
│           ├── servicos.php
│           └── sobre.php
├── config/             # Application configuration files
│   ├── config.php        # General application settings (e.g., BASE_URL)
│   └── database.php      # Database connection parameters
├── css/                # Cascading Style Sheets
│   └── style.css
├── database/           # Database related files
│   └── sql/
│       └── schema.sql    # SQL script for database schema creation
├── img/                # Image assets
│   ├── cps-logo.png
│   ├── logo.svg
│   └── logo-horizontal.jpg
├── js/                 # JavaScript files
│   └── script.js
└── index.php           # Front controller for routing all requests


Key Features & Technical Details

•
Custom Routing: A central index.php acts as a front controller, managing all incoming requests and dynamically loading appropriate controllers and views based on the page GET parameter. This approach demonstrates a fundamental understanding of request lifecycle management in web applications.

•
MVC-like Pattern: The project loosely adheres to an MVC (Model-View-Controller) architectural pattern, separating data handling (implied by database schema and controller actions), presentation (views), and business logic (controllers).

•
Authentication System: Includes basic authentication functionalities (AuthController.php, login.php) for secure access to administrative areas.

•
Administrative Dashboard: A dedicated admin section (AdminController.php, admin/dashboard.php) for managing application content, indicating a full-stack capability.

•
Database Integration: Utilizes MySQL for data persistence, with a clearly defined schema (schema.sql) for users, contacts, and posts tables, showcasing database design and interaction skills.

•
Modular Configuration: Database credentials and application-wide settings are externalized in config/config.php and config/database.php for easy management and environment-specific deployments.

•
Contact Form Handling: A simulated contact submission process (index.php) demonstrates basic form data handling and user feedback mechanisms.

Database Schema

The application's data model is defined by the following SQL schema:

SQL


CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 email VARCHAR(100),
 password VARCHAR(255)
);

CREATE TABLE contacts (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 email VARCHAR(100),
 message TEXT,
 created_at DATETIME
);

CREATE TABLE posts (
 id INT AUTO_INCREMENT PRIMARY KEY,
 title VARCHAR(200),
 content TEXT,
 created_at DATETIME
);


Setup and Installation

To set up and run this project locally, follow these steps:

1.
Clone the repository:

Bash


git clone <repository_url>
cd adv-app




2.
Configure the database:

•
Create a MySQL database (e.g., nome_do_banco).

•
Import the database/sql/schema.sql file to set up the necessary tables.

•
Update config/database.php with your database credentials (DB_HOST, DB_NAME, DB_USER, DB_PASS).



3.
Configure application settings:

•
Adjust config/config.php if necessary, particularly the BASE_URL if your project is not hosted at the root of your web server.



4.
Web Server:

•
Ensure you have a PHP-compatible web server (e.g., Apache, Nginx) configured to serve the project directory.



5.
Access the application:

•
Open your web browser and navigate to the configured BASE_URL.



Author

Rodrigo Marchi Gonella

