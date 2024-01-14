# Virtual Exam System

[![License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![GitHub Issues](https://img.shields.io/github/issues/yourusername/virtual-exam-system)](https://github.com/yourusername/virtual-exam-system/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/yourusername/virtual-exam-system)](https://github.com/yourusername/virtual-exam-system/pulls)

<!-- Add a brief project description and an optional logo -->

## Overview

The Virtual Exam System is a web-based application designed to streamline and enhance the examination process within our university. It provides a platform for administrators, instructors, and students to manage exams, answer questions, and assess performance.

<!-- Add any relevant screenshots, images, or GIFs -->

## Screenshots
### Frontend top Section
![Alt text](https://pbs.twimg.com/media/GD09LokboAAbqJC?format=jpg&name=900x900)

### Backend Dashboard Section
![Alt text](https://pbs.twimg.com/media/GD06xrWaAAAsfUd?format=jpg&name=900x900)

## Features

- **User Management:**
  - Register, authenticate, and manage users (administrators, instructors, students).

- **Exam Creation and Management:**
  - Create and schedule exams with diverse question types.
  - Build and maintain a question bank.

- **Exam Delivery:**
  - User-friendly interface for taking exams.
  - Security measures to prevent unauthorized access.

- **Grading and Reporting:**
  - Automated grading for objective questions.
  - Comprehensive reports on exam performance.

## Technologies Used

- **Backend:** PHP, Laravel
- **Frontend:** HTML, CSS, JavaScript (Vue.js)
- **Database:** MySQL
- **Testing:** PHPUnit, Laravel Dusk
- **Version Control:** Git, GitHub

## Getting Started

### Prerequisites

- PHP (7.4 or later)
- Composer
- Node.js
- MySQL

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/virtual-exam-system.git

2. Install dependencies:
   ```bash
   cd virtual-exam-system
   ```bash
   composer install
   ```bash
   npm install

3. Set up the database:
   ```bash
   mv .env.example .env
   ```bash
   php artisan key:generate
   ```bash
   php artisan migrate

4. Run the development server:
   ```bash
   php artisan serve
   
