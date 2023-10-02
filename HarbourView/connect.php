<?php
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost','root','','resort');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into registration(name, password) values(?, ?)");
        $stmt->bind_param("ss", $name, $password);
        $execval = $stmt->execute();
        echo $execval;
        echo "Registration successfully...";
        $stmt->close();
        $conn->close();
    }
?>
