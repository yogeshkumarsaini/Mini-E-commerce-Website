# 🛒 Mini E-commerce Website

A fully functional mini E-commerce web application built using **PHP, MySQL, Bootstrap, AJAX**, and integrated with **Razorpay Payment Gateway**.

This project demonstrates real-world concepts like cart management, asynchronous operations, and secure online payment processing.

---

## 🚀 Features

* 🛍️ Product Listing (Dynamic from Database)
* ➕ Add to Cart (AJAX without page reload)
* 🔢 Quantity Selector (+ / - buttons)
* 🔔 Toast Notifications (Bootstrap)
* ⏳ Loading Spinner (Better UX)
* 🛒 Cart Management (Session-based)
* 💳 Razorpay Payment Integration
* 🔐 Secure Payment Verification (Server-side)
* 📦 Order Storage in Database

---

## 🧠 Concepts Used

* PHP Sessions (`$_SESSION`)
* MySQL Database
* AJAX (jQuery)
* Bootstrap 5 UI
* Payment Gateway Integration
* MVC-like Folder Structure
* Server-side Validation

---

## 📁 Project Structure

```
Mini-E-commerce-Website/
│── config/
│   ├── db.php
│   └── razorpay.php
│
│── actions/
│   ├── add_to_cart.php
│   └── verify_payment.php
│
│── pages/
│   ├── index.php
│   ├── cart.php
│   ├── checkout.php
│   └── success.php
│
│── includes/
│   ├── header.php
│   └── footer.php
│
│── assets/
│   └── js/cart.js
```

---

## 🗄️ Database Setup

Run the following SQL:

```sql
CREATE DATABASE ecommerce;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price INT,
    image VARCHAR(255)
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    total INT,
    payment_id VARCHAR(255),
    order_id VARCHAR(255),
    status VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## ⚙️ Installation & Setup

### 1️⃣ Clone Repository

```
git clone https://github.com/yogeshkumarsaini/Mini-E-commerce-Website.git
```

### 2️⃣ Move to XAMPP / htdocs

```
C:/xampp/htdocs/Mini-E-commerce-Website
```

### 3️⃣ Install Dependencies

```
composer require razorpay/razorpay
```

### 4️⃣ Configure Database

Edit:

```
config/db.php
```

### 5️⃣ Add Razorpay Keys

Edit:

```
config/razorpay.php
```

```php
$keyId = "YOUR_KEY_ID";
$keySecret = "YOUR_KEY_SECRET";
```

---

## 💳 Razorpay Test Details

Use test mode credentials and card:

```
Card: 4111 1111 1111 1111
CVV: 123
Expiry: Any future date
OTP: 1234
```

---

## ▶️ How to Run

* Start Apache & MySQL (XAMPP)
* Open browser:

```
http://localhost/Mini-E-commerce-Website/pages/index.php
```

---

## 🔐 Security Notes

* Payment verified using Razorpay signature
* Never trust frontend response
* Keep API keys secure
* Use prepared statements (recommended improvement)
