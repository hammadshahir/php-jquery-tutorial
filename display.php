<?php

    include 'connect.php';

    if(isset($_POST['displaySend'])) {
        $table = '<table class="table my-3">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Country</th>
                            <th scope="col">Zip</th>
                            <th scope="col">Operations</th>
                        </tr>
                    </thead>';
        
        
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($con, $sql);
        $number = 1;

        while($row = mysqli_fetch_assoc($result )) {
            $id = $row['id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $city = $row['city'];
            $state = $row['state'];
            $country = $row['country'];
            $zip_code = $row['zip_code'];

            $table.='
                <tr>
                    <td>'.$number.'</td>
                    <td>'.$first_name.'</td>
                    <td>'.$last_name.'</td>
                    <td>'.$email .'</td>
                    <td>'.$phone.'</td>
                    <td>'.$city.'</td>
                    <td>'.$state.'</td>
                    <td>'.$country.'</td>
                    <td>'.$zip_code.'</td>
                    <td><button class="btn btn-info" onclick="editRecord('.$id.')">Update</button>
                        <button class="btn btn-danger" onclick="deleteRecord('.$id.')">Delete</button></td>
                </tr>';
            $number++;    
        }
        $table.='</table>';
        echo $table; 
    }

    
