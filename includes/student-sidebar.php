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
                <a class="nav-link" href="book-hostel.php">
                    <svg class="bi bi-house-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 01.5.5V5h-.5a.5.5 0 010-1H8V1zm4.5.5a.5.5 0 01.5.5V6h-.5a.5.5 0 010-1H12V1.5zM2 6.5a.5.5 0 01.5-.5H3v8.086a.5.5 0 01-.427.495l-.073.007a.5.5 0 01-.495-.427L2 13.586V6.5zm2.646-.646a.5.5 0 01.708 0l5.3 5.3a.5.5 0 01-.708.708l-5.3-5.3a.5.5 0 010-.708z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M13 6.5V14H3V6.5a1 1 0 011-1h8a1 1 0 011 1z" clip-rule="evenodd"/>
                    </svg>
                    <span class="hide-menu">Book Hostel</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="room-details.php">
                    <svg class="bi bi-house" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 3.5a.5.5 0 01.5-.5h1.734a.5.5 0 01.342.133l6.25 5.5a.5.5 0 00.708 0l6.25-5.5A.5.5 0 0114.766 3H16.5a.5.5 0 01.5.5v9a.5.5 0 01-.5.5H13v-7a1 1 0 00-1-1H4a1 1 0 00-1 1v7H2.5a.5.5 0 01-.5-.5v-9zM1 4.477V12.5a.5.5 0 00.5.5h2.037a1.5 1.5 0 01.953.342l-3.56 3.12a.5.5 0 01-.754-.638l.985-.864V5.5a.5.5 0 01.5-.5H6.5a.5.5 0 01.5.5v7.793l.854.75a.5.5 0 01-.157.833l-.088.043a1.5 1.5 0 01-.897-.016L4.44 11.083a.5.5 0 01-.305-.465v-7.14l-.586-.513A1.5 1.5 0 013.537 4H1.5a.5.5 0 00-.5.477zM8 2a.5.5 0 01.5.5V6h3V2.5a.5.5 0 011 0V6a1 1 0 01-1 1H9a1 1 0 01-1-1V2.5A.5.5 0 018 2zm4 12.5a.5.5 0 00-.5-.5H9a.5.5 0 01-.5-.5v-7a.5.5 0 011-1h3a.5.5 0 01.5.5v7z" clip-rule="evenodd"/>
                    </svg>
                    <span class="hide-menu">My Room Details</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="log-activity.php">
                    <svg class="bi bi-gear" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.182 1.818a6 6 0 00-8.364 8.364l-.798.798a1 1 0 101.414 1.414l.798-.798a6 6 0 108.364-8.364l-.798-.798a1 1 0 10-1.414 1.414l.798.798zM6 10a4 4 0 114.898-3.874 5.975 5.975 0 00-1.8-.543l-.327-.065-.073-.324a5.975 5.975 0 00-.543-1.8A4 4 0 016 10z" clip-rule="evenodd"/>
                    </svg>
                    <span class="hide-menu">Log Activities</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

<!-- Bootstrap JavaScript (Optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
