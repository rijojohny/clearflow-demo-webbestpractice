# ClearFlow Plumbing & Heating – Demo Website

This project was developed as part of a technical assessment for **Web Best Practice**.


---

## Overview

The site represents a fictional local plumbing company and includes:

* Home landing page
* About company page
* Services listing
* Contact form with validation and database storage
* Responsive layout for mobile and desktop
* SEO-friendly metadata (title, description)

---

## Technology Stack

* Laravel (Blade templating)
* Bootstrap 5
* Custom CSS
* AOS animation library
* MySQL (local) / PostgreSQL (deployment)

---

## Project Structure

* `resources/views/layouts` – base layout
* `resources/views/pages` – page templates
* `resources/views/partials` – reusable components (navbar, footer)
* `public/css/site.css` – custom styling
* `app/Http/Controllers` – request handling
* `app/Models` – Eloquent models
* `database/migrations` – schema definition

---

## Running Locally

Install dependencies:

```bash
composer install
```

Create environment file:

```bash
cp .env.example .env
php artisan key:generate
```

Configure database credentials in `.env`

Run migrations:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

Open:
http://127.0.0.1:8000

---

## Live Preview

The deployed demo link will be provided after hosting.

---

## Notes

The business name and content are fictional and used solely for demonstration purposes.
This project focuses on demonstrating development approach, code organisation and frontend implementation quality.

---

**Submitted by:**
Rijo Johny
