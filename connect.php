<?php
    $Name = $_POST['Name'];
    $email = $_POST['email'];
    $Massage = $_POST['Massage'];

    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO feedback (Name, email, Massage) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $Name, $email, $Massage);
        $stmt->execute();
        echo "submitted";
        $stmt->close();
        $conn->close();
    }
?>





