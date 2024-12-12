<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("connection.php");


$successMessage = '';
$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fty1'])) {
    
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $Department = $_POST['department'];
    $Email = $_POST['email'];


    $stmt = $conn->prepare("INSERT INTO fty1 (Username, Password, Department, Email) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        $errorMessage = "Error in preparing statement: " . $conn->error;
    } else {
        $stmt->bind_param("ssss", $Username, $Password, $Department, $Email);

        
        if ($stmt->execute()) {
            $successMessage = "Thank you for providing details...!";
        } else {
            $errorMessage = "Error executing statement: " . $stmt->error;
        }

        
        $stmt->close();
    }


    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: rgb(233, 230, 225);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-image: linear-gradient(to left, #bac2c4, #fff);
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #6a11cb;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #6a11cb;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2575fc;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Faculty Login</h2>
        <?php if (!empty($successMessage)) { echo "<p>$successMessage</p>"; } ?>
        <?php if (!empty($errorMessage)) { echo "<p>$errorMessage</p>"; } ?>
        <form id="registration-form" method="post" onsubmit="handleRegister(event)">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" id="department" name="department" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit" name="fty1">Login</button>
        </form>
    </div>
    <script>
        function handleRegister(event) {
            event.preventDefault(); 

            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            const department = document.getElementById("department").value;
            const email = document.getElementById("email").value;

            const queryParams = `?username=${encodeURIComponent(username)}&password=${encodeURIComponent(password)}&department=${encodeURIComponent(department)}&email=${encodeURIComponent(email)}`;
 
            window.location.href = `page5.html${queryParams}`;
        }
    </script>
</body>
</html>
