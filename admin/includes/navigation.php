<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Navigation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Navbar Header */
        .navbar-header {
            background-color: #ffffff; /* Navbar background color */
            border-bottom: 1px solid #dee2e6; /* Bottom border color */
            padding: 10px;
        }

        /* Navbar Brand */
        .navbar-brand img.admin-logo {
            max-width: 70px; /* Adjust the max width of the admin logo */
            height: auto;
            margin-right: 10px; /* Adjust as needed */
        }

        /* Navbar Text */
        .navbar-text {
            color: #000000; /* Text color */
            margin-right: 20px; /* Adjust as needed */
        }

        /* Navbar Toggler */
        .navbar-toggler {
            border: none; /* Remove border from navbar toggler */
        }

        /* Dropdown Menu */
        .dropdown-menu {
            margin-top: 10px; /* Adjust dropdown menu margin-top */
            border: none; /* Remove dropdown menu border */
        }

        /* Dropdown Item */
        .dropdown-item {
            color: #000000; /* Dropdown item text color */
        }

        /* Hover and Focus */
        .nav-item:hover .nav-link,
        .nav-item:focus .nav-link {
            color: #007bff; /* Change hover/focus color */
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            background-color: #f8f9fa; /* Change dropdown item hover/focus background color */
        }
    </style>
</head>
<body>

<nav class="navbar top-navbar navbar-expand-md">
    <div class="navbar-header" data-logobg="skin6">
        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        <div class="navbar-brand">
            <img src="../assets/images/admin-icn.png" alt="admin logo" class="admin-logo">
            <a href="dashboard.php">
                <span class="logo-text"></span>
            </a>
        </div>
        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
    </div>
    <div class="navbar-collapse collapse" id="navbarSupportedContent">
        <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
        </ul>
        <ul class="navbar-nav float-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../assets/images/users/admin-icn.png" alt="user" class="rounded-circle" width="35">
                    <?php
                    $aid=$_SESSION['id'];
                    $ret="SELECT * from admin where id=?";
                    $stmt= $mysqli->prepare($ret) ;
                    $stmt->bind_param('i',$aid);
                    $stmt->execute();
                    $res=$stmt->get_result();
                    while($row=$res->fetch_object()) {
                    ?>
                    <span class="ml-2 d-none d-lg-inline-block">
                        <span>Hello,</span>
                        <span class="text-dark"><?php echo $row->username; ?></span>
                        <i data-feather="chevron-down" class="svg-icon"></i>
                    </span>
                    <?php } ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                    <a class="dropdown-item" href="profile.php">
                        <i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                        My Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="acc-setting.php">
                        <i data-feather="settings" class="svg-icon mr-2 ml-1"></i>
                        Account Setting
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">
                        <i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- Bootstrap JavaScript (Optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
