# CRUD Application with PHP and PostgreSQL

This project is a simple CRUD (Create, Read, Update, Delete) application built with PHP 8.1 and PostgreSQL. It demonstrates basic operations with a PostgreSQL database and serves as a template for similar projects.

## Features

- **Create:** Add new items to the database.
- **Read:** Display items stored in the database.
- **Update:** Edit existing items.
- **Delete:** Remove items from the database.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP 8.1 or later
- PostgreSQL
- Composer
- A web server (e.g., Apache, Nginx)

## Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/your-username/crud_app.git
   cd crud_app

2. **Install Composer dependencies**
    composer install

3. **Set up the database**
    Create a PostgreSQL database named `crud_db`.
    Create a table named `items`:
    CREATE DATABASE crud_db;

    \c crud_db;

    CREATE TABLE items (
        id SERIAL PRIMARY KEY,
        name VARCHAR(100),
        description TEXT
    );

4. **Create a .env file**
    Create a .env file in the root directory of the project with the following content:
    DB_HOST=localhost
    DB_NAME=crud_db
    DB_USER=username
    DB_PASS=password
    DB_CHARSET=utf8

    Replace `username` and `password` with your PostgreSQL credentials.

**Usage**
    Start your web server.
    Navigate to your project directory (php_crud).
    Open your browser and go to: http://localhost/crud_app/index.php
    You should see the main page displaying the list of items with options to create, read, update, and delete items.

**Contributing**
    If you would like to contribute to this project, please fork the repository and submit a pull request. For major changes, please open an issue to discuss what you would like to change.


**License**
    This project is licensed under the MIT License. See the `LICENSE` file for details


**Acknowledgements**
    PHP
    PostgreSQL
    Composer
    vlucas/phpdotenv