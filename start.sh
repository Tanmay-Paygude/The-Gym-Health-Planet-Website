#!/bin/bash

echo "Starting Gym Management System..."
echo ""
echo "1. Installing dependencies..."
npm install
echo ""
echo "2. Setting up database..."
node backend/database-setup.js
echo ""
echo "3. Starting server..."
echo "Server will be available at http://localhost:3000"
echo "Press Ctrl+C to stop the server"
echo ""
npm start
