<?php
include('dbConnection.php');

if (isset($_POST['submitContact'])) {
    // Check database connection
    if ($conn->connect_error) {
        die("<script>
            alert('Database connection failed: " . $conn->connect_error . "');
            window.location.href='index.php#Contact';
        </script>");
    }

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $submit_date = date('Y-m-d H:i:s');

    // Create contacts table if it doesn't exist
    $sql = "CREATE TABLE IF NOT EXISTS contacts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        subject VARCHAR(200) NOT NULL,
        message TEXT NOT NULL,
        submit_date DATETIME NOT NULL,
        status VARCHAR(20) DEFAULT 'unread'
    )";
    
    if ($conn->query($sql) === false) {
        die("<script>
            alert('Error creating table: " . $conn->error . "');
            window.location.href='index.php#Contact';
        </script>");
    }

    // Insert the message
    $sql = "INSERT INTO contacts (name, email, subject, message, submit_date) 
            VALUES (?, ?, ?, ?, ?)";
            
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sssss", $name, $email, $subject, $message, $submit_date);
        if ($stmt->execute()) {
            echo "<script>
                alert('Message sent successfully!');
                window.location.href='index.php#Contact';
            </script>";
        } else {
            echo "<script>
                alert('Error sending message: " . $stmt->error . "');
                window.location.href='index.php#Contact';
            </script>";
        }
        $stmt->close();
    } else {
        echo "<script>
            alert('Error preparing statement: " . $conn->error . "');
            window.location.href='index.php#Contact';
        </script>";
    }
}
