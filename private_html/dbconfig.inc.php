<?php
/* ==================================================================================
   MySQL Connection information and site wide constants
   PDO - PHP Data Objects
   ------------------------------------------------------------------------------- */
#
# Set database constants
define('DB_USER', 'newuser');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'samplepost');
#
#  Begin the session
session_start();
#
#  Connect to the database
$db_name = DB_NAME;
$username = DB_USER;
$password = DB_PASSWORD;
try {
    /* PDO Syntax
     * new PDO( dsn, username, password )
     * dsn = Data Source Name ... for MySQL:
     *     "mysql:dbname=name;host=localhost"
     *     where "name" is the name of the database
     */
    $dsn = "mysql:" . "dbname=" . DB_NAME . ";" . "host=35.202.96.106";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
