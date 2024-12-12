<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Correct path to include connection.php
include("connection.php"); 

$successMessage = '';
$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['std'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $hallticket = $_POST['hallticket'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO std (first_name, last_name, dob, course, hallticket) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $dob, $course, $hallticket);

    // Execute the statement
    if ($stmt->execute()) {
        $successMessage = "Thank you for providing details...!";
    } else {
        $errorMessage = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: rgb(233, 230, 225);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
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
        .form-group input, .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        .form-group input:focus, .form-group select:focus {
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
        <h2>Student Registration</h2>
        <?php if (!empty($successMessage)) { echo "<p>$successMessage</p>"; } ?>
        <?php if (!empty($errorMessage)) { echo "<p>$errorMessage</p>"; } ?>
        <form id="registration-form" method="post" onsubmit="handleRegister(event)">
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="course">Course</label>
                <select id="course" name="course" required>
                    <option value="">Select Course</option>
                    <option value="MSc Mathematics">MSc Mathematics</option>
                    <option value="MSc Mathematics with computer science">MSc Mathematics with computer science</option>
                    <option value="MSc Computer Science">MSc Computer Science</option>
                    <option value="MSc Chemistry">MSc Chemistry</option>
                    <option value="MSc Physics">MSc Physics</option>
                    <option value="MSc Biology">MSc Biology</option>
                    <option value="MSc Biotechnology">MSc Biotechnology</option>
                    <option value="MSc Environmental Science">MSc Environmental Science</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hallticket">Hall Ticket Number</label>
                <input type="text" id="hallticket" name="hallticket" required>
            </div>
            <button type="submit" name="std">Register</button>
        </form>
    </div>
    <script>
        function handleRegister(event) {
            event.preventDefault(); 
            const firstName = document.getElementById("first-name").value;
            const lastName = document.getElementById("last-name").value;
            const dob = document.getElementById("dob").value;
            const course = document.getElementById("course").value;
            const hallTicket = document.getElementById("hallticket").value;
            const queryParams = `?first_name=${encodeURIComponent(firstName)}&last_name=${encodeURIComponent(lastName)}&dob=${encodeURIComponent(dob)}&course=${encodeURIComponent(course)}&hallticket=${encodeURIComponent(hallTicket)}`;
            window.location.href = `page4.html${queryParams}`;
        }
    </script>
</body>
</html>
