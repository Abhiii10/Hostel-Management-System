<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Navigation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <svg class="bi bi-house" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 3.5a.5.5 0 01.5-.5h1.734a.5.5 0 01.342.133l6.25 5.5a.5.5 0 00.708 0l6.25-5.5A.5.5 0 0114.766 3H16.5a.5.5 0 01.5.5v9a.5.5 0 01-.5.5H13v-7a1 1 0 00-1-1H4a1 1 0 00-1 1v7H2.5a.5.5 0 01-.5-.5v-9zM1 4.477V12.5a.5.5 0 00.5.5h2.037a1.5 1.5 0 01.953.342l-3.56 3.12a.5.5 0 01-.754-.638l.985-.864V5.5a.5.5 0 01.5-.5H6.5a.5.5 0 01.5.5v7.793l.854.75a.5.5 0 01-.157.833l-.088.043a1.5 1.5 0 01-.897-.016L4.44 11.083a.5.5 0 01-.305-.465v-7.14l-.586-.513A1.5 1.5 0 013.537 4H1.5a.5.5 0 00-.5.477zM8 2a.5.5 0 01.5.5V6h3V2.5a.5.5 0 011 0V6a1 1 0 01-1 1H9a1 1 0 01-1-1V2.5A.5.5 0 018 2zm4 12.5a.5.5 0 00-.5-.5H9a.5.5 0 01-.5-.5v-7a.5.5 0 011-1h3a.5.5 0 01.5.5v7z" clip-rule="evenodd"/>
                    </svg>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register-student.php">
                    <svg class="bi bi-person-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.5 8a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0zM9 9H7v2a1 1 0 112 0V9zm2-4a.5.5 0 00-1 0V6h-2a.5.5 0 000 1h2v2a.5.5 0 001 0V7h2a.5.5 0 000-1h-2V4z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M9.354 8.354a.5.5 0 00-.708-.708L7.5 8.793 6.354 7.646a.5.5 0 00-.708.708L6.793 9l-1.147 1.146a.5.5 0 00.708.708L7.5 9.707l1.146 1.147a.5.5 0 00.708-.708L8.207 9l1.147-1.146a.5.5 0 000-.708z" clip-rule="evenodd"/>
                    </svg>
                    <span class="hide-menu">Register Student</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view-students-acc.php">
                    <svg class="bi bi-people" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 5a3 3 0 013-3h10a3 3 0 013 3v6a3 3 0 01-3 3H3a3 3 0 01-3-3V5zm3-2a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H3z" clip-rule="evenodd"/>
                        <path d="M11 9a2 2 0 100-4 2 2 0 000 4zM5 9a2 2 0 100-4 2 2 0 000 4zm6.5 2a4.5 4.5 0 100-9 4.5 4.5 0 000 9zM8 14a5 5 0 100-10A5 5 0 008 14z"/>
                    </svg>
                    <span class="hide-menu">View Student Acc.</span>
                </a>
            </li>
            <!-- Add other sidebar items here -->
            <li class="nav-item">
                <a class="nav-link" href="bookings.php">
                    <svg class="bi bi-calendar-check" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 2a2 2 0 012-2h12a2 2 0 012 2H0z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M1 1h14a1 1 0 011 1v12a1 1 0 01-1 1H1a1 1 0 01-1-1V2a1 1 0 011-1zm3 4a1 1 0 011-1h2a1 1 0 110 2H5a1 1 0 01-1-1zm0 3a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm3-3a1 1 0 100 2h2a1 1 0 100-2H7zm3 3a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm0 3a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-3-3a1 1 0 100 2h2a1 1 0 100-2H7z" clip-rule="evenodd"/>
                    </svg>
                    <span class="hide-menu">Book Hostel</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-students.php">
                    <svg class="bi bi-people" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 5a3 3 0 013-3h10a3 3 0 013 3v6a3 3 0 01-3 3H3a3 3 0 01-3-3V5zm3-2a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H3z" clip-rule="evenodd"/>
                        <path d="M11 9a2 2 0 100-4 2 2 0 000 4zM5 9a2 2 0 100-4 2 2 0 000 4zm6.5 2a4.5 4.5 0 100-9 4.5 4.5 0 000 9zM8 14a5 5 0 100-10A5 5 0 008 14z"/>
                    </svg>
                    <span class="hide-menu">Hostel Students</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-rooms.php">
                    <svg class="bi bi-grid" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 0h6v6H0V0zm8 0h6v6H8V0zM0 8h6v6H0V8zm8 0h6v6H8V8z" clip-rule="evenodd"/>
                    </svg>
                    <span class="hide-menu">Manage Rooms</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-courses.php">
                    <svg class="bi bi-book" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 0a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H2a2 2 0 01-2-2V0zm2 13a1 1 0 011-1h10a1 1 0 110 2H3a1 1 0 01-1-1zm0-2a1 1 0 011-1h10a1 1 0 110 2H3a1 1 0 01-1-1zm1-6h10a1 1 0 011 1v6a1 1 0 01-1 1H3a1 1 0 01-1-1V6a1 1 0 011-1z" clip-rule="evenodd"/>
                    </svg>
                    <span class="hide-menu">Manage Courses</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

<!-- Bootstrap JavaScript (Optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
