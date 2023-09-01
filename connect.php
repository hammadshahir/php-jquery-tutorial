<?php

    @$con = new mysqli('localhost', 'root', 'root', 'php_jquery_example');

    // Check connection
    if (@$mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . @$mysqli -> connect_error;
    exit();
    }