<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');


if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $when = $_POST['when'];
    $guests = $_POST['guests'];

    if($connection->connect_error){
        die('Connection failed: ' . $connection->connect_error);
    } else {
        $stmt = $connection->prepare("INSERT INTO book_form (`name`, `email`, `phone`, `address`, `when`, `guests`) VALUES (?, ?, ?, ?, ?, ?)");
        
        if($stmt === false) {
            die('Prepare failed: ' . $connection->error);
        }
        
        $stmt->bind_param("sssssi", $name, $email, $phone, $address, $when, $guests);
        
        if($stmt->execute()) {
            echo "Booking successful";
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
        $connection->close();
    }
}
?>