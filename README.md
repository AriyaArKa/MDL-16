# Laravel Assignment – Requirements

This Laravel project includes the following components as per the assignment instructions:

## ✅ 1. Blade Template Conversion

- The following HTML/Bootstrap template has been converted into Laravel Blade:
  - [StartBootstrap - Personal](https://startbootstrap.com/theme/personal)
- Converted into:
    - `resources/views/layouts/app.blade.php` for the main layout.
    - `resources/views/home.blade.php` for the home page.
    
  - Page views extend the layout using `@extends`.

## ✅ 2. Database Migrations

- Migration files are created based on the provided database diagram:
  - `customers` table
  - `categories` table
  - `products` table
  - `invoices` table
  - `invoice_products` table
- Each table in the schema is defined using Laravel migration files in the `database/migrations` folder.

## ✅ 3. Form Handling (e.g., Contact Form)

- A contact or task form is created and performs the following:
  - Submits data via `POST` request.
  - Displays a **success message** using `session()->flash()`.
  - Logs user input using `Log::info()` into Laravel's log file.
  - Redirects to a **confirmation page** that shows the submitted data.


