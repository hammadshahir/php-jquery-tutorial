<?php

    include 'connect.php';

    if(isset($_POST['deleteUserDataById'])) {
        $uniqueRecord = $_POST['deleteUserDataById'];
        $query = "DELETE FROM users WHERE id = $uniqueRecord";
        $result = mysqli_query($con, $query);
    }