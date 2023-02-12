# Installation Guide
This guide provides step-by-step instructions for installing the PHP-based web application on your local machine.

## Prerequisites
Before you begin, make sure you have the following software installed on your machine:

PHP 7.2 or later

MySQL

Apache Web Server

## Step 1: Clone the Repository
Open your terminal or command prompt and navigate to the directory where you want to clone the repository. Run the following command to clone the repository:

git clone https://github.com/sojitra-nency/ScubeTV.git

## Step 2: Import the Database
Create a new database in MySQL and import the s3tv.sql file from the repository. 

## Step 3: Configure the Application
Open the config.php file in the root directory of the repository and modify the following settings:

DB_HOST: "localhost"

DB_USER: "root"

DB_PASS: ""

DB_NAME: "s3tv"

##  Step 4: Deploy the Application
Copy the contents of the repository to your Apache Web Server's document root directory. 
The location of the document root directory may vary depending on your operating system and configuration.

## Step 5: Access the Application
Open your web browser and navigate to http://localhost:8000. 

If you encounter any issues during installation, please feel free to reach out to to me for assistance..



