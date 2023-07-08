<?php
    $phones = $_POST ['phones'];
    $mnumber = $_POST['mnumber'];
    $imei = $_POST ['imei'];
    $passcode = $_POST ['passcode'];
    $description = $_POST ['description'];
    $fname = $_POST ['fname'];
    $lname = $_POST ['lname'];
    $email = $_POST ['email'];
    $phone = $_POST ['phone'];
    $address = $_POST ['address'];
    $city = $_POST ['city'];
    $postcode = $_POST ['postcode'];


       //Database connection 
    
    $conn = new mysqli('localhost', 'root','' , 'registration');
    if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
    }else {
        $stmt = $conn->prepare("insert into registration3(mnumber, imei, passcode, description, fname, lname, email, phone, address, city, postcode)
            values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssissss",$phones, $mnumber, $imei, $passcode, $description, $fname, $lname, $email, $phone, $address, $city, $postcode)
        $stmt->execute();
        echo "registration Successfull..."
        $stmt->close();
        $conn->close();
    
    }
?>