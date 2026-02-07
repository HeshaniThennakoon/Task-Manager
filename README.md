# Simple Task Manager

A minimal web application to manage personal or team tasks using **HTML, CSS, PHP, and MySQL**.

This project was developed as an interview task to demonstrate basic CRUD operations, REST API endpoints, database connectivity, and clean code structure.

---

## Features

* View all tasks in a table
* Add a new task using a form
* Edit and update tasks
* Delete tasks
* Task fields:
  * Title (required)
  * Description
  * Priority (Low, Medium, High)
  * Status (Pending, In Progress, Completed)
  * Due Date (optional)
* Basic client-side validation
* MySQL database persistence
* REST API endpoints: POST, PUT, DELETE

---

## Technologies Used

* Frontend: HTML, CSS, JavaScript
* Backend: PHP
* Database: MySQL
* Server: Apache (XAMPP)

---

## Project Structure

```
task-manager/
│
├── index.php          # Task list page (Read)
├── add-task.php       # Add new task form (Create)
├── edit-task.php      # Edit task form (Update)
├── save-task.php      # Save new task to DB (Create)
├── update-task.php    # Update task in DB (Update)
├── delete-task.php    # Delete task from DB (Delete)
│
├── api/
│   └── tasks.php      # REST API endpoint (POST, PUT, DELETE)
│
├── config/
│   └── db.php         # Database connection
│
├── assets/
│   └── style.css      # Styling for all pages
│
└── README.md
```

---

## How to Run Backend

1. Install **XAMPP**
2. Start **Apache** and **MySQL** services in XAMPP control panel
3. Place the project folder inside `htdocs`:

```
C:\xampp\htdocs\task-manager
```

4. Open your browser and visit:

```
http://localhost:8080/task-manager
```

> Note: Replace `8080` with your Apache port if different

---

## How to Run Frontend

1. All frontend pages (HTML + PHP) are integrated with backend
2. Open the following pages in your browser via Apache:

   * Task list: `index.php`
   * Add task: `add-task.php`
   * Edit task: `edit-task.php?id=TASK_ID`

> Forms and tables are connected to the database using PHP, no separate frontend server needed.

---

## Database Setup

1. Open **phpMyAdmin**:

```
http://localhost:8080/phpmyadmin
```

2. Create a new database:

```
task_manager
```

3. Run the following SQL query to create the table:

```sql
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    priority ENUM('Low','Medium','High') NOT NULL,
    status ENUM('Pending','In Progress','Completed') NOT NULL,
    due_date DATE NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## Assumptions & Trade-offs

* No authentication is implemented
* Basic form validation only (title required)
* Focused on functionality, minimal design
* REST API does not have authentication or token-based security
* MySQL is used for real data persistence, no localStorage or mock data

---

## REST API Endpoints

| Method | Endpoint       | Description                                              |
| ------ | -------------- | -------------------------------------------------------- |
| POST   | /api/tasks.php | Create a new task (body JSON)                            |
| PUT    | /api/tasks.php | Update an existing task (body JSON, include `id`)        |
| DELETE | /api/tasks.php | Delete a task (body x-www-form-urlencoded, include `id`) |


---

# Thank you for reviewing my project!
