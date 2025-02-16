<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iAgro</title>
    <style>
        /* Reset default margins */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        /* Navbar styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #2c1d15;
            padding: 15px 20px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin: 0 15px;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            transition: color 0.3s, transform 0.3s;
        }

        .nav-links a:hover {
            color: #f1c40f;
            transform: scale(1.1);
        }

        /* Main Content Layout */
        .container {
            width: 90%;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            text-align: center;
            gap: 15px;
        }

        .user-box {
            flex: 1 1 250px; /* Each box takes equal space */
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .user-box img {
            width: 80px;
            height: auto;
        }

        .user-box a {
            text-decoration: none;
            color: blue;
            font-size: 14px;
        }

        .user-box a:hover {
            text-decoration: underline;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<!-- User Selection Cards -->
<div class="container">
    <div class="user-box">
        <img src="images/customer.png" alt="Customer">
        <h3>Customer</h3>
        <a href="#">Sign Up (It's Free)</a><br>
        <a href="#">Sign In & Get Started</a>
    </div>

    <div class="user-box">
        <img src="images/farmer.png" alt="Farmer">
        <h3>Farmer</h3>
        <a href="#">Sign Up (It's Free)</a><br>
        <a href="#">Sign In & Get Started</a>
    </div>

    <div class="user-box">
        <img src="images/worker.png" alt="Worker">
        <h3>Worker</h3>
        <a href="#">Sign Up (It's Free)</a><br>
        <a href="#">Sign In & Get Started</a>
    </div>

    <div class="user-box">
        <img src="images/admin.png" alt="Admin">
        <h3>Admin</h3>
        <a href="#">Sign In & Get Started</a>
    </div>
</div>

</body>
</html>