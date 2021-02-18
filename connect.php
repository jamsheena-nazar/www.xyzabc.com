<?php
    $name = $_POST['name'];
    $id = $_POST['id'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $status = $_POST['status'];
    $education = $_POST['education'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error) 
    {
        die("Connection Failed : ".$conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("INSERT into form(name,id,dob,nationality,status,education) VALUES(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sissss",$name, $id, $dob, $nationality, $status, $education);
        $stmt->execute();
        echo "Successfully Saved!";
        $stmt->close();
        $conn->close();
    }
    ?>