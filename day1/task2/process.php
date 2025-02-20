<?php

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $skills =  implode(", ", $_POST['skills']) ;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $department = $_POST['department'];
    
    

    echo "<h2>Registration Successful</h2>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Country:</strong> $country</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Skills:</strong> $skills</p>";
    echo "<p><strong>Username:</strong> $username</p>";
    echo "<p><strong>Department:</strong> $department</p>";

?>
