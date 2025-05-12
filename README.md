# 🚗 Car Rental Website Project

This is a web-based **Car Rental System** developed as a Mini Project for college. It enables users to browse, reserve, and return cars online, while providing administrative features for managing cars and reservations.

---

## 📑 Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Requirements](#requirements)
- [Installation](#installation)
- [Database Schema](#database-schema)
- [Pages Overview](#pages-overview)
- [User Stories](#user-stories)
- [Admin Functionalities](#admin-functionalities)
- [Project Report](#project-report)
- [Screenshots](#screenshots)
- [Authors](#authors)
- [Support](#support)

---

## 🧾 Introduction

This project is a **Car Rental Website** designed to streamline the car booking process. It supports:

- User authentication
- Car browsing and searching
- Car reservation and return
- Admin management dashboard

---

## ✅ Features

### User Side:
- Sign Up / Login
- View all available cars
- Search cars by brand, model, etc.
- Reserve and return cars
- View reservation history
- Submit feedback

### Admin Side:
- Login as Admin
- Add / Update / Delete car listings
- Manage car availability
- View user reservations and returns
- Accept / Reject bookings
- View feedback reports

---

## 🛠 Tech Stack

- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP
- **Database:** MySQL
- **Local Server:** XAMPP

---

## 🧰 Requirements

- XAMPP or any local Apache server
- PHP 7.x or higher
- MySQL

---

## ⚙️ Installation

1. Download and install **XAMPP** from [apachefriends.org](https://www.apachefriends.org/index.html).
2. Clone this repository or download the ZIP file.
3. Copy the project folder into `htdocs` inside the XAMPP installation directory.
4. Open **phpMyAdmin** at `http://localhost/phpmyadmin`.
5. Create a new database named `carproject`.
6. Import the provided SQL file `carproject.sql` (found inside the `/database` folder).
7. Start Apache and MySQL using XAMPP Control Panel.
8. Open the browser and go to: `http://localhost/your-folder-name`

---

## 🧩 Database Schema

Database Name: `carproject`

Main Table: `car`

| Column         | Type         | Description                  |
|----------------|--------------|------------------------------|
| car_id         | INT (PK)     | Auto-incremented ID          |
| car_make       | VARCHAR      | Brand of the car             |
| car_model      | VARCHAR      | Model of the car             |
| car_year       | INT          | Year of manufacture          |
| car_color      | VARCHAR      | Color                        |
| car_price      | INT          | Price per day (rental)       |
| car_available  | BOOLEAN      | Availability (true/false)    |
| car_image      | VARCHAR      | Path to image                |
| car_description| TEXT         | Description of the vehicle   |

---

## 📄 Pages Overview

- `index.php`: Homepage
- `login.php`: Login for users and admins
- `register.php`: User registration page
- `car_list.php`: List of all available cars
- `reserve_car.php`: Reserve a car
- `return_car.php`: Return a car
- `admin_dashboard.php`: Admin main dashboard
- `add_car.php`: Add new car listing
- `view_reservations.php`: Admin can view/manage reservations

---

## 👤 User Stories

- As a user, I want to register and log in to my account.
- As a user, I want to search and view available cars.
- As a user, I want to reserve a car and get a confirmation.
- As a user, I want to return the car after use.
- As a user, I want to view all my past reservations.
- As an admin, I want to manage all cars, users, and bookings.
- As an admin, I want to delete cars that are no longer available.

---

## 🔐 Admin Functionalities

- Add/Edit/Delete cars
- View all users
- View pending reservations
- Accept or reject bookings
- Mark returned cars
- View user feedback

---

## 📘 Project Report

- 📂 `report/`: Contains the complete project report in `.docx` format
  - Introduction
  - Literature Review
  - Methodology
  - System Design (UML, ER Diagram, Flowcharts)
  - Screenshots
  - Testing and Result
  - Conclusion
  - References

---

## 🖼️ Screenshots

> ![Homepage](../car_change/images/homepage.png)


## 👨‍💻 Authors

- Pranav Patil  
> this project was built as part of the academic mini project submission.

---

## 🙌 Support

If you like this project or found it helpful, feel free to give it a ⭐️ on [GitHub](https://github.com/pranavpatilp/mini_project) and share it with your peers.
