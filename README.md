# Laravel Authentication with Bootstrap

This is a simple Laravel project that demonstrates user authentication, including sign-up, sign-in, and Dashboard and a profile page. It uses Laravel/UI for authentication scaffolding and Bootstrap for styling.

This is a Laravel project integrated with Keen Metronic 8, a powerful Bootstrap-based admin theme. The project includes user authentication with Laravel/UI and uses Keen Metronic for a modern and responsive user interface.

## Features

-   User login and logout functionality with front-end and backendVaidation.
-   Profile page for authenticated users.
-   Automatic generation of slugs using the user's name and a 4-digit random number.

## Requirements

-   PHP >= 8.1
-   Composer installed
-   Node.js and npm installed

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/sahilkappu/assignment

    cd signUp Project

    composer install

     php artisan key:generate
     php artisan migrate
     npm install && npm run dev
     php artisan serve
    ```

Visit http://127.0.0.1:8000 in your browser, register a new user, log in, and explore the profile page.
