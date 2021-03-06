<?php
//connect.php
 
/**
 * This script connects to MySQL using the PDO object.
 * This can be included in web pages where a database connection is needed.
 * Customize these to match your MySQL database connection details.
 * This info should be available from within your hosting panel.
 */
 
//Our MySQL user account.
define('MYSQL_USER', 'root');
//define('MYSQL_USER', 'gen-005');
 
//Our MySQL password.
define('MYSQL_PASSWORD', 'password');
//define('MYSQL_PASSWORD', 'x0ER2a(4]n5V');
 
//The server that MySQL is located on.
define('MYSQL_HOST', 'localhost');
 
//The name of our database.
define('MYSQL_DATABASE', 'quest');
 
/**
 * PDO options / configuration details.
 * I'm going to set the error mode to "Exceptions".
 * I'm also going to turn off emulated prepared statements.
 */
$pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);
 
/**
 * Connect to MySQL and instantiate the PDO object.
 */
$pdo = new PDO(
    "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE, //DSN
    MYSQL_USER, //Username
    MYSQL_PASSWORD, //Password
    $pdoOptions //Options
);
 
//The PDO object can now be used to query MySQL.

?>
