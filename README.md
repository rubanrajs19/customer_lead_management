# customer_lead_management
This includes setting up user authentication and authorization, customer and lead management, search and filtering functionalities, and email notifications.
# CodeIgniter 4 Web Application

This is a CodeIgniter 4 web application that includes user authentication and authorization, customer and lead management, search and filtering functionalities, email notifications, unit tests, and a dashboard with basic statistics.

## Requirements

- PHP 7.3 or higher
- Composer
- MySQL or any other supported database

## Installation

### Step 1: Clone the Repository

```bash
git clone https://github.com/rubanrajs19/customer_lead_management.git
cd yourrepository

Step 2: Install Dependencies
bash

composer install
Step 3: Set Up Environment Variables
Copy the .env.example file to .env and update the database and email configurations.

bash

cp .env.example .env
Edit the .env file with your database and email settings:

dotenv

database.default.hostname = localhost
database.default.database = your_database
database.default.username = your_username
database.default.password = your_password
database.default.DBDriver = MySQLi

email.fromEmail = 'your-email@example.com'
email.fromName = 'Your Name'
email.SMTPHost = 'smtp.example.com'
email.SMTPUser = 'your-smtp-username'
email.SMTPPass = 'your-smtp-password'
email.SMTPPort = 587
Step 4: Run Migrations and Seeders
Run the following commands to set up the database tables and seed initial data:

bash

php spark migrate
php spark db:seed RoleSeeder
Step 5: Start the Development Server
bash

php spark serve
The application will be available at http://localhost:8080.

Features
Authentication and Authorization
User registration and login.
Admin users can manage all data.
Regular users can only manage their data.
Customer Management
CRUD (Create, Read, Update, Delete) operations for customers.
Each customer has fields for name, email, phone, and address.
Lead Management
CRUD operations for leads.
Leads are associated with customers.
Each lead has a status (e.g., New, Contacted, Qualified, Lost).
Search and Filtering
Search functionality to find customers and leads.
Filtering to view leads by status.
Email Notifications
Send email notifications to users when a new lead is assigned to them.
Use Laravel Queues for sending emails.
Unit Testing
Unit tests for key functionalities, including customer creation.
Dashboard
Basic statistics (e.g., number of leads per status, number of activities per type).

