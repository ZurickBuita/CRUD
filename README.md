# CRUD Application

A simple CRUD (Create, Read, Update, Delete) application built with **HTML**, **PHP**, **MySQL**, and **JavaScript**. The UI leverages **Bootstrap** for a modern, responsive look. The codebase implements the **Singleton** and **Repository** design patterns for better maintainability and scalability.

## Features

- Responsive design using Bootstrap
- CRUD operations for managing records in a MySQL database
- Separation of concerns via Repository pattern
- Singleton pattern for database connection
- Clean, modular codebase using PHP classes

## Technologies Used

- **Frontend:** HTML, JavaScript, Bootstrap 5
- **Backend:** PHP (OOP)
- **Database:** MySQL

## Design Patterns

### Singleton

- Used for the **Database connection** class to ensure only one instance of the connection is created throughout the application.
- Prevents multiple connections and ensures efficient resource usage.

### Repository Pattern

- Used to abstract CRUD operations from direct SQL queries.
- Keeps database logic separate from the application's business logic.
- Easy to maintain, test, and extend.

## Structure

```
CRUD/
├── db/
│   └── Database.php       # Singleton DB connection
├── repository/
│   └── UserRepository.php # Repository for user operations
├── models/
│   └── User.php           # User model class
├── index.php              # Entry point, list & handle records
├── form.php               # Form for creating/editing records
└── README.md
```

## Quick Start

1. **Clone the repository**
   ```bash
   git clone https://github.com/ZurickBuita/CRUD.git
   ```

2. **Set up the database**
   - Import the provided SQL file in your MySQL server.
   - Update `db/Database.php` with your DB credentials.

3. **Run the application**
   - Deploy on a local or remote PHP server (e.g., XAMPP, Apache).
   - Access via `http://localhost/CRUD/index.php`

## Contributing

Pull requests are welcome! Please open an issue first to discuss your ideas.

---

**Author:** [ZurickBuita](https://github.com/ZurickBuita)