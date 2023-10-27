# Laravel 10 Exam System

![Alt text](<img src="./public/ui/Full-Project-Image/COVER.png">)

### Project Overview:
The Laravel 10 Exam System is a web-based application designed to manage and conduct exams. It includes features such as user authentication, exam creation, exam scheduling, exam-taking, and result management. The system provides a seamless experience for both exam administrators and exam takers.

### Key Features:
**1. User Authentication and Authorization:**
   - User registration and login with appropriate access levels (e.g., admin, teacher, student).

**2. Exam Creation and Management:**
   - Create exams with multiple-choice questions, essay questions, etc.
   - Set time limits, exam instructions, and passing criteria.

**3. Exam Scheduling:**
   - Schedule exams for specific dates and times.
   - Assign exams to classes or groups.

**4. Exam Taking:**
   - Allow students to take exams online within the scheduled time.
   - Restrict access to the exam before and after the scheduled time.

**5. Result Management:**
   - Automatically grade multiple-choice questions.
   - Provide manual grading for essay questions.
   - Generate exam reports and provide feedback to students.


### Setup and Usage:
1. Clone the repository:
   ```
   git clone https://github.com/ikramulhasan1/Exam-System.git
   ```

## users continue here:

-   Create a database locally named `examsystem`
-   Rename `.env.example` file to `.env`inside your project root and fill the database information, or run `mv .env.example .env` 
-   Open the console and cd your project root directory
-   Run `composer install` or `composer update`
-   Run `php artisan key:generate`
-   Run `php artisan migrate`
-   Run `php artisan serve`

##### You can now access your project at http://127.0.0.1:8000/ :

## If for some reason your project stop working do these:

-   `composer install`
