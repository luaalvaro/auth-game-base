<?php
    define('HOST', '127.0.0.1');
    define('ADMIN', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'auth_form');

    $connection = mysqli_connect(HOST, ADMIN, PASSWORD, DATABASE) or die ('The connection has been failed!');
