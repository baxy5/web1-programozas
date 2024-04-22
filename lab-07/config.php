<?php

session_start();

$is_logged_in = false;
if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true) {
    $is_logged_in = true;
}

define('DB_PASS', 'I1JLxIa[DG][-woj');
define('DB_NAME', 'manfred');

function get_connection()
{
    return new PDO(
        'mysql:host=localhost;dbname=' . DB_NAME . ';charset=utf8',
        DB_NAME,
        DB_PASS
    );
}

/*
CREATE TABLE `manfred`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(200) NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
*/