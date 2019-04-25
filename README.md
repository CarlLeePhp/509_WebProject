# 509_WebProject
It is a project for our paper 509.

## Precondition
These software should be installed:
+ Web Server, like Apache2;
+ DBMS, like MySQL;
+ Php5

## Installation
1. Copy all files to the root of a web server. (like: /var/www/html/)
2. Copy 'conf_supermail.php' which in the 'configration' fold out of the root of the web server.(like: /var/www/)
3. Edit 'conf_supermail.php' setting the information of the database used.

## Database
The name of the database should be "supermail". There are two tables, package and users.
package (**ID**, code, message)
users (**ID**, email, password)
