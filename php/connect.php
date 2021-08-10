<?php


define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'kursovaya');

/*
 * Подключаемся к базе данных с помощью функции mysqli_connect()
 */

$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

/*
 * Делаем проверку соединения
 */

if (!$connect) {
    die('Error connect to database!');
}