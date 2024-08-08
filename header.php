<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link rel="stylesheet" href="header.css"> <!-- Link to the CSS file -->
</head>
<body>

<header>
    <div class="container">
        <div class="logo">
            <a href="./index.php"><h1>Travel Website</h1></a>
        </div>
        <nav>
            <ul>
                <li>
                    <form action="search.php" method="get" class="search-form">
                        <input type="text" style="background-color: white" name="query" placeholder="Search flights and hotels...">
                        <button type="submit">Search</button>
                    </form>
                </li>
                <li class="navbar-item"><a href="signup.php">Create an Account</a></li>
                <li class="navbar-item"><a href="admin.php">Admin Panel</a></li>
            </ul>
        </nav>
    </div>
</header>
