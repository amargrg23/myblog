<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel with sanctum
## GitHub Repository

The source code for this project is available at the following GitHub repository:

[GitHub Repository URL](https://github.com/amargrg23/myblog/tree/feature/sanctum)

## Description

This is a Laravel-based API for managing blog posts. It allows users to create, retrieve, and manage their blog content efficiently using MongoDB.

## API Endpoints

- **GET /api/posts**: Retrieve a list of all blog posts.
- **GET /api/posts/{id}**: Retrieve details of a single blog post.

## Requirements

- PHP >= 8.0
- Composer
- MongoDB
- Node.js (for frontend, if applicable)

## Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/your-repo-name.git
cd your-repo-name
```

### 2. Install Dependencies
Make sure you have Composer installed. Run the following command to install the PHP dependencies:
```bash
composer install
```

### 3. Configure Environment Variables
Rename the .env.example file to .env and update the database connection details:
```bash
cp .env.example .env
```

### 4. Generate Application Key
Run the following command to generate a new application key:
```bash
php artisan key:generate
```

### 5. Run Migrations
If you have migrations (for example, for users), run:
```bash
php artisan migrate
```

### 6.  Start the Server
You can use the built-in PHP server to run the application locally:
```bash
php artisan serve
```
By default, the application will be accessible at http://localhost:8000.

### 7. Testing the API
You can use tools like Postman or cURL to test the API endpoints. Ensure your server is running and make requests to the specified endpoints.

### 8. Approach
In developing this API, I focused on creating a clean and modular architecture that leverages Laravel's strengths in routing, middleware, and Eloquent ORM for MongoDB integration. The main approach involved:
- **Setting Up the Environment:** Ensured all dependencies were correctly configured, including MongoDB.
- **Defining API Endpoints:** Carefully designed RESTful endpoints to facilitate easy access to blog data.
- **Implementing Middleware:** Used middleware for authentication and validation to enhance security and data integrity.
- **Error Handling::** Implemented structured error handling to provide meaningful responses for various failure scenarios.

## Challenges Faced

- **MongoDB Integration:** Ensuring that Laravel properly communicates with MongoDB required thorough understanding and configuration of the MongoDB driver.
- **Authentication:** Setting up Sanctum for user authentication posed initial difficulties, particularly with token management and securing routes.
- **Data Validation:**  Implementing robust validation for incoming requests was crucial to avoid issues with malformed data, requiring careful planning of validation rules.
- **Testing:**  Developing comprehensive tests for the API endpoints took significant effort to ensure reliability and correct functionality.





