# PHP Todo Application

A simple PHP-based Todo list application with basic CRUD operations.

## Features

- Add new tasks
- View all tasks in a table format
- Edit existing tasks
- Delete tasks
- Session-based success/error messages

## Technologies Used

- PHP
- MySQL
- Bootstrap 4.0
- Font Awesome 6.2.0

## Requirements

- PHP
- MySQL
- XAMPP/WAMP/LAMP server

## Setup

1. Place the project files in your web server's directory (e.g., `htdocs` for XAMPP)
2. Run the database migration file at `database/migration.php` to set up the database
3. Access the application through your web browser

## Database Structure

The application uses a MySQL database named `todoapp` with a single table:

```sql
CREATE TABLE task (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(200) NOT NULL
);
```

## Project Structure

```plaintext
├── database/
│   └── migration.php      # Database and table creation
├── handelers/
│   ├── delete-task.php    # Handle task deletion
│   ├── edit-task.php      # Handle task updates
│   └── task.php           # Handle new task creation
├── index.php              # Main application page
├── update.php            # Task edit form
├── script.js             # JavaScript functionality
└── LICENSE              # MIT License
```

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
