# StudentApp - MIT ADT University

A simple PHP web application for managing student records with CRUD operations.

## Features

- Student Management (Create, Read, Update, Delete)
- Bootstrap 5 responsive UI
- SQLite database (no MySQL setup required)
- Prepared statements for SQL injection prevention
- Form validation
- Clean, professional interface

## Requirements

- PHP 8.0 or higher
- Web server (Apache/Nginx) or XAMPP/LAMP
- SQLite support (usually included with PHP)

## Installation & Setup

### Option 1: Using XAMPP

1. Download and install XAMPP from https://www.apachefriends.org/
2. Copy the `StudentApp` folder to `C:\xampp\htdocs\` (Windows) or `/opt/lampp/htdocs/` (Linux)
3. Start Apache from XAMPP Control Panel
4. Open browser and navigate to `http://localhost/StudentApp`

### Option 2: Using PHP Built-in Server

1. Open terminal/command prompt
2. Navigate to the StudentApp directory:
   ```bash
   cd path/to/StudentApp
   ```
3. Start PHP built-in server:
   ```bash
   php -S localhost:8000
   ```
4. Open browser and navigate to `http://localhost:8000`

## Database

The application uses SQLite database which is automatically created as `studentapp.db` in the project root when you first run the application. No manual database setup required.

## File Structure

```
StudentApp/
├── index.php      # Main page - displays student list
├── add.php        # Add new student form
├── edit.php       # Edit existing student form
├── delete.php     # Delete student handler
├── db.php         # Database connection and setup
├── README.md      # This file
└── studentapp.db  # SQLite database (auto-created)
```

## Usage

1. **Home Page**: View all students in a table format
2. **Add Student**: Click "Add New Student" button to add a new record
3. **Edit Student**: Click "Edit" button next to any student record
4. **Delete Student**: Click "Delete" button (with confirmation prompt)

## Security Features

- Prepared statements to prevent SQL injection
- Input validation and sanitization
- HTML output escaping to prevent XSS
- Email format validation

## Troubleshooting

**Issue**: Database connection error
- **Solution**: Ensure PHP has SQLite extension enabled

**Issue**: Permission denied error
- **Solution**: Make sure the web server has write permissions to the project directory

**Issue**: Page not found
- **Solution**: Verify the web server is running and the URL is correct

## License

This project is created for educational purposes at MIT ADT University.