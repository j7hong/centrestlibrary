========================================================
README FILE
========================================================

HTTP 513 – Web Project   
Team: JH    
Project: Centre St. Library
Name: James Hong


PROJECT DESCRIPTION
-------------------------------
This is a very simple application made using the Laravel framework written in PHP.


LOGIN DETAILS
--------------------
I uploaded my project files to a server and tried to run my application, but it did not work, so I am submitting this project locally.


DATABASE DETAILS
--------------------------
Both databases (server and local) have been exported to files located in the /app/database folder. They are name appropriately, so you can import the local database file to run the application on a local server, since I could not successfully upload the application to a server.


RUNNING THE APPLICATION
--------------------------------------
An easy way to run the application on a local server is to use any command-line tool and change the directory to the application folder.

For example, if the project folder is in "c:/xampp/htdocs/centrestlibrary" then,

1. Type     cd c:/xampp/htdocs/centrestlibrary    and hit the return or enter key.

2. Type     php artisan serve     and hit the return or enter key.
   (This will start a local development server.)

3. Open a browser and type        localhost:8000       and hit the return or enter key.
   (This will display the homepage of the project application.)

4. To stop the local development server from running, type    Ctrl+C  

   in the command-line tool.


DIRECTORY
---------
/public   - all the public files of the application (images, CSS, javascript)
/app      - the main folder of the application

/app/models      - model files
/app/views       - view files
/app/controllers - controller files

/app/database    - database files
/app/routes      - all the registered routes of the application
/app/config/database - configuration file for databases

/plain-html   - files that do not use the Laravel framework
