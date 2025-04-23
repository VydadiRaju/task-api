# Task Manager API

A mini PHP-based task manager API with CRUD operations and a simple HTML front-end.

## 🚀 Features
- Add / Update / Delete / Complete tasks
- Simple HTML + Bootstrap front-end
- JSON-based REST API using pure PHP

## 📦 Setup Instructions
1. Extract the ZIP file into your XAMPP `htdocs` folder.
2. Import `task_db.sql` into your MySQL using phpMyAdmin.
3. Update `db.php` with your MySQL credentials.
4. Start Apache and MySQL using XAMPP.
5. Open your browser and go to `http://localhost/task-api/index.html`

## 🔗 API Endpoints
- `tasks/list.php` - List all tasks
- `tasks/add.php` - Add a new task
- `tasks/update.php` - Update task title
- `tasks/complete.php` - Mark task as completed
- `tasks/delete.php` - Delete a task
