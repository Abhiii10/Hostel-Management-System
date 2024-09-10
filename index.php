<?php
session_start();
include('includes/dbconn.php');

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Prepare and execute the query
    $stmt = $mysqli->prepare("SELECT id FROM userregistration WHERE email=? AND password=?");
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows == 1) {
        $stmt->bind_result($id);
        $stmt->fetch();

        $_SESSION['id'] = $id;
        $_SESSION['login'] = $email;

        // Log user activity
        $uip = $_SERVER['REMOTE_ADDR'];
        $log = "INSERT INTO userLog(userId, userEmail, userIp) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($log);
        $stmt->bind_param('sss', $id, $email, $uip);
        $stmt->execute();
        $stmt->close();

        // Redirect to the dashboard
        header("location: student/dashboard.php");
        exit();
    } else {
        // Invalid username or password
        $error_message = "Sorry, Invalid Username/Email or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://images.pexels.com/photos/259588/pexels-photo-259588.jpeg?auto=compress&cs=tinysrgb&dpr=1&h=750&w=1260');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .auth-box {
            width: 400px; /* Width of the authentication box */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Adding transparency to the background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #3498db; /* Blue color frame */
        }

        .form-control {
            width: calc(100% - 20px); /* Adjusted width for the input fields */
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            background-color: #28a745; /* Green button color */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #218838; /* Darker green on hover */
        }

        .admin-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #dc3545; /* Red color */
        }

        .admin-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="auth-box">
        <h2 style="text-align:center;">Student Login</h2>
        <form method="POST">
            <div class="form-group">
                <label for="username">Email</label>
                <input class="form-control" name="email" id="email" type="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" name="password" id="password" type="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" name="login" class="btn-login">LOGIN</button>
        </form>
        <a href="admin/index.php" class="admin-link">Go to Admin Panel</a>
    </div>
</body>

</html>

