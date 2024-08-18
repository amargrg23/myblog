<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Enhanced Blog Application with Authentication and Admin Panel
## GitHub Repository

The source code for this project is available at the following GitHub repository:

[GitHub Repository URL](https://github.com/amargrg23/myblog/tree/feature/auth-admin-panel)

## Overview

This project enhances the basic blog application from Assessment 1 by adding user authentication, an admin panel, and role-based access control using Laravel. The aim is to build a more robust and secure application.

## Approach

### 1. Project Setup
The project was initialized using the basic blog application from Assessment 1. A new branch named `feature/auth-admin-panel` was created to implement the new features.

### 2. MongoDB Integration
The application was configured to use MongoDB as the database, following the setup demonstrated in Lecture 4. The `mongodb/laravel-mongodb` package was utilized to facilitate this integration.

### 3. Authentication Setup
- **Laravel UI Installation:** Installed Laravel UI using the command `composer require laravel/ui`.
- **Authentication Scaffolding:** Generated authentication scaffolding with Bootstrap using `php artisan ui bootstrap --auth`.
- **Bootstrap Setup:** Installed required npm packages and compiled assets using `npm install && npm run dev`.
- **Layout Update:** Updated the master layout to include Bootstrap styling for a consistent design.

### 4. Admin Panel and Middleware (Bonus)
- **Middleware Creation:** Generated custom middleware with `php artisan make:middleware AdminMiddleware` to restrict access to the admin panel.
- **Middleware Implementation:** Implemented the middleware to check if the authenticated user has admin privileges.
- **Route Protection:** Applied the middleware to admin routes in `web.php`, ensuring they are accessible only by admins.

### 5. Admin Routes
- **Route Definition:** Defined routes for the admin panel with an `Admin` prefix in `routes/web.php`.
- **Route Protection:** Ensured these routes are protected by the custom middleware, allowing access only to authorized users.
- **Admin Functionality:** Created routes for managing users and blog posts within the admin panel.

### 6. Controllers and Views
- **Controller Creation:** Generated controllers for managing users (`Admin/UserController`) and blog posts (`Admin/PostController`) using `php artisan make:controller`.
- **CRUD Operations:** Implemented CRUD operations with appropriate validation in the controllers.
- **View Creation:** Designed the admin panel views using Bootstrap 5.3 examples, including listing, creating, editing, and deleting users and blog posts.
- **Layout:** Created a new layout for the admin panel (`admin.blade.php`) with a dashboard template for a cohesive look.

### 7. Role-Based Access Control
- **Role Addition:** Added roles (admin, author, user) to the user model and database.
- **Registration Process:** Updated the registration process to allow admins to assign roles during user creation.
- **Access Control:** Ensured that only admins can access user management functionalities.

### 8. Testing
- **Authentication Testing:** Thoroughly tested the authentication system to ensure proper functionality.
- **Admin Functionality Testing:** Verified the CRUD operations for users and blog posts in the admin panel.
- **Access Control Testing:** Ensured that non-admin users cannot access the admin panel or restricted routes.

## Challenges Faced

- **MongoDB Integration:** Required attention to schema design and query syntax differences compared to relational databases.
- **Role-Based Access Control:** Implementing a secure and flexible role-based system required careful planning and implementation.
- **UI Consistency:** Ensuring consistent Bootstrap styling across various views demanded meticulous attention to detail.





