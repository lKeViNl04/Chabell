<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# 🌟 Chabell - Kigurumi Store

**Chabell** is a playful and cozy e-commerce application built with Laravel, designed for selling adorable kigurumi pajamas.

---

## ⚙️ Prerequisites

Before you begin, make sure you have:

* **PHP 8.2+**
* **Composer**
* **XAMPP**, **WAMP**, **MAMP**, or any compatible web server
* **SQLite** (included by default)

---

## 🚀 Installation Guide

### 1. Clone the Repository

```bash
git clone [REPOSITORY_URL]
cd Chabell
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Set Up the Environment

```bash
cp .env.example .env
```

### 4. Configure the Database

Edit the `.env` file and set your preferred database connection.

**Recommended: SQLite**

```
DB_CONNECTION=sqlite
```

**Alternative: MySQL**

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tienda
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate App Key

```bash
php artisan key:generate
```

### 6. Run Migrations & Seeders

```bash
php artisan migrate
php artisan db:seed
```

### 7. Create Storage Symlink

```bash
php artisan storage:link
```

### 8. Prepare the Image Directory

Create the following folder to store product images:

```
storage/app/public/img/
```

### 9. Download Product Images

Images are available at: **https://drive.google.com/file/d/1_FrStzb7RNMHkclhOzxaeJLZ14lLtDrC/view?usp=sharing**

Place all downloaded images inside `storage/app/public/img/`.

---

## 🧪 Run the Application

### Option 1: Laravel’s Built-in Server

```bash
php artisan serve
```

### Option 2: XAMPP/WAMP Setup

1. Move the project folder to `htdocs` (XAMPP) or `www` (WAMP)
2. Start Apache from the control panel
3. Visit: `http://localhost/Chabell/public`

---

## 👥 Demo Accounts

Preloaded test users:

* **Admin:** `admin@admin.com` / `password`
---

## 🛍️ Preloaded Products

The system includes **18 kigurumi products**, each with names, descriptions, and prices ready to use.

---

## 🧩 Project Structure

* **Frontend:** Laravel Blade Views
* **Backend:** Laravel 11
* **Database:** SQLite (default)
* **Storage:** Local filesystem

---

## 📝 Notes

* The project uses **SQLite** by default to simplify setup, but can be configured for **MySQL** or other databases.
* Product images are stored in the public disk and served via the symbolic link created with `php artisan storage:link`.

---
