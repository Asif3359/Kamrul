<?php

include 'connectDB.php';
// Check if the form is submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // // Prepare and bind
    // $stmt = $conn->prepare("INSERT INTO kamrul.users (name, email) VALUES (?, ?)");
    // $stmt->bind_param("ss", $name, $email);

    // // Execute the statement
    // if ($stmt->execute()) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $stmt->error;
    // }

    $sql = "INSERT INTO kamrul.users (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement and connection
    // $stmt->close();
    $conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regestration</title>
</head>
<body>
    <!-- Reg from -->
    <form action="reg.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Register">
    </form>
    
</body>
</html>