<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if dark mode is enabled (persisting user preference)
$darkMode = isset($_SESSION['dark-mode']) ? $_SESSION['dark-mode'] : false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Header</title>

    <!-- Styles -->
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: <?= $darkMode ? "#1a1a1a" : "#f5f5f5" ?>;
            color: <?= $darkMode ? "white" : "black" ?>;
            margin: 0;
            padding: 0;
            transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        /* Navigation Bar */
        nav {
            background-color: <?= $darkMode ? "#333" : "#251611" ?>;
            padding: 10px 0;
            transition: background 0.3s;
        }

        nav ul {
            list-style: none;
            text-align: center;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin: 0 15px;
            transition: transform 0.3s ease-in-out;
        }

        nav ul li a {
            color: <?= $darkMode ? "#f5f5f5" : "#a06450" ?>;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 8px;
            transition: color 0.3s, background 0.3s;
        }

        /* Hover Effects */
        nav ul li:hover {
            transform: scale(1.1);
        }

        nav ul li a:hover {
            background: #a06450;
            color: white;
        }

        /* Button Styles */
        .button {
            padding: 10px 20px;
            border-radius: 25px;
            background: linear-gradient(45deg, #3e779d, #65a9d7);
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button:hover {
            background: #28597a;
            transform: scale(1.1);
        }

        /* Dark Mode */
        .dark-mode {
            background-color: #1a1a1a;
            color: white;
        }

        /* Dark Mode Toggle */
        #darkModeToggle {
            position: absolute;
            top: 10px;
            right: 20px;
            cursor: pointer;
            font-size: 20px;
            background: none;
            border: none;
            color: #fff;
            transition: transform 0.3s;
        }

        #darkModeToggle:hover {
            transform: rotate(180deg);
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <button id="darkModeToggle">🌙</button>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- JavaScript -->
    <script>
        // Dark Mode Toggle
        const darkModeToggle = document.getElementById("darkModeToggle");
        let darkMode = <?= json_encode($darkMode) ?>;

        darkModeToggle.addEventListener("click", () => {
            darkMode = !darkMode;
            document.body.classList.toggle("dark-mode");

            // Save dark mode preference in session (AJAX)
            fetch("toggle_dark_mode.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ darkMode })
            }).then(() => location.reload());
        });

        // Smooth Scroll
        document.querySelectorAll("nav ul li a").forEach(anchor => {
            anchor.addEventListener("click", (event) => {
                event.preventDefault();
                const target = document.querySelector(anchor.getAttribute("href"));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 50,
                        behavior: "smooth",
                    });
                }
            });
        });
    </script>

</body>
</html>