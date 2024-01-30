# Laravel Multi-Role Authentication with Bootstrap and Keen Metronic 8

This Laravel project demonstrates a multi-role-based user authentication system, utilizing Laravel/UI for authentication scaffolding and Bootstrap for styling. The user interface is enhanced with Keen Metronic 8, a powerful Bootstrap-based admin theme.

## Features

- User authentication with roles: admin and customer.
- Secure user login and logout functionality with front-end and backend validation.
- User registration with role assignment.
- Admin dashboard for managing blogs.
- Customer view to see blogs.

## Requirements

- PHP >= 8.1
- Composer installed
- Node.js and npm installed

## Getting Started

1. Clone the repository:

    ```bash
    git clone https://github.com/yourusername/yourproject.git
    ```

2. Install dependencies:

    ```bash
    composer install
    npm install
    ```

3. Set up your environment variables:

    ```bash
    cp .env.example .env
    ```

    Update `.env` file with your database configuration and other necessary settings.

4. Generate application key:

    ```bash
    php artisan key:generate
    ```

5. Run database migrations:

    ```bash
    php artisan migrate
    ```

6. Seed the database with roles and an admin user:

    ```bash
    php artisan db:seed
    ```
    

7. Compile assets:

    ```bash
    npm run dev
    ```

8. Serve your application:

    ```bash
    php artisan serve
    ```

9. Visit `http://localhost:8000` in your browser.

## Usage

- Access the registration page to create a new account.
- After registration, log in using your credentials.
- Admin users can manage blogs through the admin dashboard.
- Customers can view the list of blogs.

Feel free to explore the project and customize it according to your needs!
