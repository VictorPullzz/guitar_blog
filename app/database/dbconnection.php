<?php

require_once('dbconfig.php');

$DB_CONNECTION = function() use ($DB_CONFIG) {
    // Mysql - standard environment php
    $dbConnect = new mysqli($DB_CONFIG['host'], $DB_CONFIG['user'], $DB_CONFIG['pass'], $DB_CONFIG['name']);

    if ($dbConnect->connect_error) {
        die("ERROR: Unable to connect: " . $dbConnect->connect_error);
    }

    return $dbConnect;
};

$DB_QUERY = function($query) use ($DB_CONNECTION) {
    $result = $DB_CONNECTION()->query($query);
    return (array) $result->fetch_object();
};