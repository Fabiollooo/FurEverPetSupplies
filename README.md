# FurEverPetSupplies

A pet supplies e-commerce platform built with CodeIgniter 4 and MySQL.

## Overview

Customers can browse, search, and filter pet products, manage a shopping cart and wishlist, and create accounts. Admins can manage products, customers, and orders.

## Tech Stack

- **Backend**: CodeIgniter 4 (PHP 8.1+)
- **Database**: MySQL
- **Frontend**: HTML/CSS/JavaScript

## Quick Start

1. Copy `CI4projects/CI4-Vanilla` to `C:\xampp\htdocs\FurEverPetSupplies`

2. Start Apache and MySQL in XAMPP Control Panel

3. Create the database:
   ```bash
   mysql -u root -p
   CREATE DATABASE fureverpets;
   EXIT;
   ```

4. Go to `http://localhost/FurEverPetSupplies/public/`

## Features

**Customer**
- Browse and search products
- Filter by category
- Shopping cart
- Wishlist
- User registration and login

**Admin**
- Product management (CRUD)
- Apply discounts
- Customer management
- Order tracking and status updates

## Project Structure

```
app/
├── Controllers/      # Request handlers
├── Models/          # Database models
├── Views/           # HTML templates
├── Config/          # Configuration files
└── Database/        # Migrations & seeds
public/             # Web root with assets
writable/           # Cache, logs, sessions
```

## Database Tables

- **product** - Product catalog with pricing and stock
- **customer** - Customer accounts and profiles
- **orders** - Order history and status
- **orderdetail** - Items in each order
- **staff** - Admin users

## Known Issues

- Staff passwords stored as plain text (not hashed)
- Cart/wishlist are session-based (lost on logout)
- No checkout flow yet
- Database must be created manually

## Future Improvements

- Payment gateway integration
- Persistent cart storage
- Email notifications
- Product reviews
- Order tracking notifications
