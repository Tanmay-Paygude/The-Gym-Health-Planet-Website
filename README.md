# Gym Management System

A modern gym management system built with Node.js, Express.js, and MySQL. This project has been reorganized from a PHP-based system to a clean, structured Node.js application.

## Project Structure

```
gym-management/
├── backend/                 # Node.js backend
│   ├── server.js           # Main Express server
│   ├── config.js           # Configuration settings
│   └── database-setup.js   # Database initialization script
├── frontend/               # Frontend files
│   ├── css/               # CSS stylesheets
│   ├── js/                # JavaScript files
│   ├── partials/          # HTML partials
│   └── *.html             # HTML pages
├── images/                # All images and media files
├── package.json           # Node.js dependencies
└── README.md             # This file
```

## Features

- **User Authentication**: Signup and login with JWT tokens
- **Password Security**: Bcrypt hashing for secure password storage
- **MySQL Database**: Persistent data storage
- **Responsive Design**: Bootstrap-based frontend
- **Image Management**: Organized image storage
- **RESTful API**: Clean API endpoints for frontend communication

## Prerequisites

- Node.js (v14 or higher)
- MySQL (v5.7 or higher)
- npm or yarn

## Installation

1. **Clone or download the project**
   ```bash
   cd gym-management
   ```

2. **Install dependencies**
   ```bash
   npm install
   ```

3. **Set up MySQL database**
   - Create a MySQL database named `gym_db`
   - Update database credentials in `backend/config.js` if needed
   - Run the database setup script:
   ```bash
   node backend/database-setup.js
   ```

4. **Start the server**
   ```bash
   npm start
   ```
   
   For development with auto-restart:
   ```bash
   npm run dev
   ```

5. **Access the application**
   - Open your browser and go to `http://localhost:3000`
   - The frontend will be served from the Express server

## API Endpoints

### Authentication
- `POST /api/signup` - User registration
- `POST /api/login` - User login
- `GET /api/profile` - Get user profile (requires authentication)

### Request/Response Examples

**Signup:**
```json
POST /api/signup
{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password123",
  "confirm_password": "password123"
}
```

**Login:**
```json
POST /api/login
{
  "email": "john@example.com",
  "password": "password123"
}
```

## Database Schema

The system uses a single `gym_signup` table with the following structure:

```sql
CREATE TABLE gym_signup (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

## Configuration

Update the database configuration in `backend/config.js`:

```javascript
module.exports = {
  database: {
    host: 'localhost',
    port: 3306,
    user: 'root',
    password: 'your_password',
    database: 'gym_db'
  },
  jwt: {
    secret: 'your-super-secret-jwt-key',
    expiresIn: '24h'
  },
  server: {
    port: 3000
  }
};
```

## Security Features

- Password hashing with bcrypt
- JWT token authentication
- Input validation and sanitization
- CORS protection
- SQL injection prevention with parameterized queries

## Development

The project uses:
- **Backend**: Express.js, MySQL2, bcryptjs, jsonwebtoken
- **Frontend**: HTML5, CSS3, JavaScript (ES6+), Bootstrap
- **Database**: MySQL

## Migration from PHP

This project was migrated from a PHP-based system. The following changes were made:

1. **Removed PHP files**: All `.php` files have been removed
2. **Reorganized structure**: Created dedicated folders for backend, frontend, and images
3. **Updated image paths**: All image references now point to `/images/` directory
4. **Implemented REST API**: Replaced PHP form processing with Express.js API endpoints
5. **Added security**: Implemented proper password hashing and JWT authentication
6. **Modernized frontend**: Updated HTML forms to use JavaScript fetch API

## Troubleshooting

1. **Database connection issues**: Ensure MySQL is running and credentials are correct
2. **Port conflicts**: Change the port in `backend/config.js` if port 3000 is in use
3. **Image loading issues**: Verify images are in the `images/` directory
4. **CORS errors**: Check that the frontend is being served from the same origin as the API

## License

This project is licensed under the ISC License.
