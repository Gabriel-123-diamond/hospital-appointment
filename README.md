# 🏥 Hospital Appointment System

Welcome to the **Hospital Appointment System**, a Laravel-based web application that allows users to book, manage, and cancel hospital appointments with ease. Built using Laravel and powered by modern web technologies, this system ensures a seamless experience for both patients and hospital administrators. 🚀

## 📌 Features

✅ User authentication with Laravel Jetstream.\
✅ View available hospital departments and their services.\
✅ Book appointments for specific hospital departments.\
✅ View personal bookings and cancel appointments.\
✅ Real-time alerts and notifications for bookings.\
✅ Secure and optimized database management.

---

## ⚙️ Installation Guide

To get started with this project, follow the steps below.

### 1️⃣ Prerequisites

Before running this project, ensure you have the following installed:

- **PHP 8+**
- **Composer** (PHP dependency manager) 🎼
- **Node.js & npm** (for frontend assets) 🟢
- **MySQL or any database of your choice** 🛢️

### 2️⃣ Clone the Repository

```sh
git clone https://github.com/your-repository/hospital-appointment-system.git](https://github.com/Gabriel-123-diamond/hospital-appointment.git)
cd hospital-appointment
```

### 3️⃣ Install Dependencies

Run the following command to install all necessary PHP packages:

```sh
composer install
```

Then, install JavaScript dependencies:

```sh
npm install
```

### 4️⃣ Set Up Environment Variables

Copy the `.env.example` file to create a new `.env` file:

```sh
cp .env.example .env
```

Now, open `.env` and update your **database credentials**.

### 5️⃣ Generate Application Key

Run this command to generate an application key:

```sh
php artisan key:generate
```

### 6️⃣ Run Database Migrations

```sh
php artisan migrate --seed
```

*(This will create the necessary database tables and seed sample data.)*

### 7️⃣ Serve the Application

```sh
php artisan serve
```

Your application should now be running at `http://127.0.0.1:8000/` 🎉

### 8️⃣ Compile Frontend Assets

To compile styles and scripts, run:

```sh
npm run dev
```

*For production build, use:*

```sh
npm run build
```

---

## 📜 Usage Guide

1️⃣ Register or login using the authentication system.\
2️⃣ Browse available hospital departments and services.\
3️⃣ Select a department and view available appointment slots.\
4️⃣ Book an appointment, view your bookings, or cancel a booking if needed.\
5️⃣ Receive instant feedback on your booking status.

---
📌 Database Configuration

Make sure to configure your .env file correctly. Set up the database details as follows:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hospital_db
DB_USERNAME=root
DB_PASSWORD=
```

Then, run migrations again if needed:

```
php artisan migrate --seed
```

## 📌 Troubleshooting

- If migrations fail, check your `.env` database credentials.
- If styling is broken, ensure **npm run dev** is executed successfully.
- If authentication fails, clear the cache:
  ```sh
  php artisan cache:clear && php artisan config:clear
  ```

---

## 🛠️ Built With

- **Laravel** - Backend framework for web applications.
- **Bootstrap/Tailwind** - Frontend styling.
- **MySQL** - Database management system.
- **Blade** - Laravel's templating engine.

---

## 📞 Support

Need help? Feel free to reach out:
📧 Email: [support@hospitalappointmentsystem.com](mailto\:gabrielpeter231@gmail.com)\
💬 Discord: [Join Community](https://discord.gg/your-link)

---

### 🚀 Happy Coding & Stay Healthy! 😊

© 2025 Gabbie Codes. All Rights Reserved.
