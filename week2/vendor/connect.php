<?php

    $connect = mysqli_connect('localhost', 'root', '', 'practice2');

    if (!$connect) {
        die('Error connect to DataBase');
    }