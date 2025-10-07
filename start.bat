@echo off
echo Starting Gym Management System...
echo.
echo 1. Installing dependencies...
call npm install
echo.
echo 2. Setting up database...
call node backend/database-setup.js
echo.
echo 3. Starting server...
echo Server will be available at http://localhost:3000
echo Press Ctrl+C to stop the server
echo.
call npm start
