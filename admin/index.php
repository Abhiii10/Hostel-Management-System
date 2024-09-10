<?php
session_start();
include('../includes/dbconn.php');

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $stmt=$mysqli->prepare("SELECT username,email,password,id FROM admin WHERE (userName=? OR email=?) and password=? ");
    $stmt->bind_param('sss',$username,$username,$password);
    $stmt->execute();
    $stmt->bind_result($username,$email,$password,$id);
    $rs=$stmt->fetch();
    $stmt->close();

    if($rs){
        $_SESSION['id']=$id;
        $uip=$_SERVER['REMOTE_ADDR'];
        $ldate=date('d/m/Y h:i:s', time());
        header("location:dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid Username/Email or password');</script>";
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
            background-color: #ff6347;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #e74c3c;
        }
    </style>
</head>

<body>
    <div class="auth-box">
        <h2 style="text-align:center;">Admin Login</h2>
        <form method="POST">
            <div class="form-group">
                <label for="username">Email or Username</label>
                <input class="form-control" name="username" id="username" type="text" placeholder="Email or Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" name="password" id="password" type="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" name="login" class="btn-login">LOGIN</button>
        </form>
        <div class="col-lg-12 text-center mt-5">
           <a href="../index.php" class="text-danger">Go Back</a>
        </div>
    </div>
</body>

</html>