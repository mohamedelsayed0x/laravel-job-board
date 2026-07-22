# Laravel Job Board

A simple job board application built with Laravel as part of my learning journey.

The project is currently under development and will continue to be improved as I learn and add new Laravel features.

## Project Status

🚧 Work in Progress

This repository currently includes the features and concepts implemented so far. The README will be updated as the project grows.

## Features Implemented

- Display all job listings
- Display a single job
- Create new job listings
- Form validation with error messages
- Pagination for job listings
- Employers and jobs relationship
- Tags and jobs many-to-many relationship
- Eloquent ORM
- Model factories
- Database seeders
- Database migrations
- Blade components and layouts
- Tailwind CSS styling
- CSRF protection
- Mass assignment protection

## Laravel Concepts Practiced

- Routing
- Blade templates
- Blade components
- Eloquent models
- Migrations
- Factories
- Seeders
- Validation
- Pagination
- Lazy loading
- Eager loading
- One-to-many relationships
- Many-to-many relationships
- Pivot tables
- Form handling
- Redirects
- Tinker

## Database Structure

### Employers

- `id`
- `name`
- `created_at`
- `updated_at`

### Job Listings

- `id`
- `employer_id`
- `title`
- `salary`
- `created_at`
- `updated_at`

### Tags

- `id`
- `name`
- `created_at`
- `updated_at`

### Job Tag Pivot Table

- `id`
- `job_listing_id`
- `tag_id`
- `created_at`
- `updated_at`

## Relationships

### Employer and Jobs

An employer can have many jobs, and each job belongs to one employer.

```php
// Employer.php
public function jobs()
{
    return $this->hasMany(Job::class);
}
```

```php
// Job.php
public function employer()
{
    return $this->belongsTo(Employer::class);
}
```

### Jobs and Tags

A job can have many tags, and a tag can belong to many jobs.

```php
// Job.php
public function tags()
{
    return $this->belongsToMany(
        Tag::class,
        table: 'job_tag',
        foreignPivotKey: 'job_listing_id',
        relatedPivotKey: 'tag_id'
    );
}
```

## Installation

Clone the repository:

```bash
git clone https://github.com/your-username/laravel-job-board.git
```

Move into the project directory:

```bash
cd laravel-job-board
```

Install PHP dependencies:

```bash
composer install
```

Install frontend dependencies:

```bash
npm install
```

Copy the environment file:

```bash
copy .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your database inside the `.env` file.

Run the migrations and seed the database:

```bash
php artisan migrate:fresh --seed
```

Build the frontend assets:

```bash
npm run build
```

Start the application:

```bash
php artisan serve
```

## Useful Commands

Run migrations:

```bash
php artisan migrate
```

Reset the database and run seeders:

```bash
php artisan migrate:fresh --seed
```

Open Laravel Tinker:

```bash
php artisan tinker
```

Run all seeders:

```bash
php artisan db:seed
```

## Planned Improvements

- Edit job listings
- Delete job listings
- User authentication
- Employer dashboard
- Authorization and policies
- Search and filtering
- Tag filtering
- Better form components
- Flash messages and notifications
- Automated tests
- REST API endpoints

## Technologies

- PHP
- Laravel
- SQLite
- Eloquent ORM
- Blade
- Tailwind CSS
- Vite
- Git and GitHub

## Author

**Mohamed Elsayed**

Backend Developer focused on PHP and Laravel.

## License

This project is open-source and available for learning and educational purposes.
