<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Basic Blog Application
### GitHub Repository URL
[GitHub Repository](https://github.com/amargrg23/myblog)
## Project Overview

This project involves creating a basic CRUD (Create, Read, Update, Delete) application using Laravel 11. The application allows users to manage blog posts and utilizes various Laravel features and concepts. The development process includes setting up the environment, creating the database, defining routes, creating models and migrations, setting up factories and seeders, creating controllers, designing Blade views, testing, and version control with Git and GitHub.

## Project Setup and Initialization

### Development Environment Setup
- **Visual Studio Code (VS Code):** Installed for code editing.
- **Node.js:** Installed to manage JavaScript dependencies.
- **Git:** Installed for version control and created a GitHub account to host the project repository.
- **Composer:** Installed for PHP dependency management.
- **XAMPP (macOS):** Installed to handle MySQL and Apache server.

### Laravel Project Creation
- Created a new Laravel project using Composer.
- Initialized Git in the project directory.
- Created a GitHub repository and linked it to the local project.
- Committed the initial setup and pushed to GitHub.

## Database Setup and Configuration

### Database Creation
- Created a MySQL database named `blog` using XAMPP.
- Configured the `.env` file with the database details to connect Laravel to MySQL.

## Defining Routes

### Resource Routes
- Defined resource routes for the `posts` in `web.php` using Laravel's `Route::resource` method to handle CRUD operations.

## Models and Migrations

### Post Model and Migration
- Generated the `Post` model and migration using the Artisan command.
- Defined the schema for the `posts` table in the migration file.
- Ran the migration to create the `posts` table in the database.

## Factory and Seeder

### Factory and Seeder Creation
- Generated a factory for the `Post` model to create dummy data.
- Generated a seeder for the `posts` table to seed the database with initial records.
- Defined the data structure in the factory and ran the seeder to populate the database with 10 sample posts.

## Controllers

### PostController
- Generated the `PostController` using the Artisan command.
- Implemented CRUD operations in the controller methods (`index`, `create`, `store`, `show`, `edit`, `update`, `destroy`).
- Added validation for data where required (e.g., in the `store` and `update` methods).

## Blade Views

### Master Layout
- Created a master layout file `app.blade.php` to define the main structure of the application.
- Used `@yield` and `@section` directives to manage content areas in different views.

### CRUD Views
- Created Blade views for listing (`index.blade.php`), creating (`create.blade.php`), showing (`show.blade.php`), editing (`edit.blade.php`), and deleting posts.

## Testing

### Functional Testing
- Tested each functionality (Create, Read, Update, Delete) by interacting with the web interface.
- Ensured that each operation works as expected and validated data integrity.

## Version Control and GitHub

### Version Control
- Used Git for version control, committing changes after each major step.
- Pushed all commits to the GitHub repository to maintain a history of the project's development.

## Challenges Faced

### Environment Configuration
- Faced issues with setting up the development environment, particularly with Composer dependencies. Resolved by ensuring correct versions and configurations.

### Database Connection
- Encountered connection issues with MySQL due to incorrect configuration in the `.env` file. Fixed by verifying and correcting the database credentials.

### Validation Errors
- Handled validation errors in form submissions by implementing proper error handling in the controller methods and displaying error messages in the views.

### Blade Syntax
- Initially had some trouble with Blade syntax and directives, but overcame this by referring to the Laravel documentation and examples.

## Conclusion

This project provided hands-on experience with Laravel's fundamental features, including routing, MVC structure, Blade templating, database migrations, seeding, and version control. By following the guidelines and overcoming the challenges, a functional CRUD application for managing blog posts was successfully created and deployed to GitHub.


