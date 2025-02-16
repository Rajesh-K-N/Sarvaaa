<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "header.php";
?>

<link rel="icon" type="image/x-icon" href="favicon.ico">

<style>
    /* Apply animations */
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Card hover and focus effect */
    .card {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        border-radius: 10px;
        overflow: hidden;
    }

    .card:hover, .card:focus-within {
        transform: scale(1.05);
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        outline: none;
    }

    /* Image hover effect */
    .card img {
        transition: transform 0.3s ease-in-out;
        border-radius: 8px;
    }

    .card:hover img {
        transform: scale(1.1);
    }

    /* Button and link effects */
    a {
        text-decoration: none;
        color: #007BFF;
        transition: color 0.3s ease-in-out, transform 0.2s ease-in-out;
    }

    a:hover, a:focus {
        color: #FF5733;
        font-weight: bold;
        transform: scale(1.05);
        outline: none;
    }

    /* Input focus effect */
    input:focus, textarea:focus {
        border: 2px solid #FF5733;
        outline: none;
        box-shadow: 0px 4px 8px rgba(255, 87, 51, 0.3);
        transition: 0.3s;
    }
</style>

<div id="featured">
    <div class="container">
        <div class="row" style="margin-left: 60px;">
            <!-- Customer Section -->
            <div class="col-md-3 fade-in">
                <section class="card">
                    <a href="#" class="image full">
                        <img src="images/customericon.jpg" alt="Customer Icon" width="150" height="200">
                    </a>
                    <center>
                        <header>
                            <h2>Customer</h2>
                        </header>
                        <p>
                            <a href="customerReg.php">Sign Up (It's Free)</a><br>
                            <a href="customerloginpanel.php">Sign In & Get Started</a>
                        </p>
                    </center>
                </section>
            </div>

            <!-- Farmer Section -->
            <div class="col-md-3 fade-in">
                <section class="card">
                    <a href="#" class="image full">
                        <img src="images/farmer icon.jpg" alt="Farmer Icon" width="150" height="200">
                    </a>
                    <center>
                        <header>
                            <h2>Farmer</h2>
                        </header>
                        <p>
                            <a href="seller.php">Sign Up (It's Free)</a><br>
                            <a href="sellerloginpanel.php">Sign In & Get Started</a>
                        </p>
                    </center>
                </section>
            </div>

            <!-- Worker Section -->
            <div class="col-md-3 fade-in">
                <section class="card">
                    <a href="#" class="image full">
                        <img src="images/workers.png" alt="Worker Icon" width="150" height="200">
                    </a>
                    <center>
                        <header>
                            <h2>Worker</h2>
                        </header>
                        <p>
                            <a href="worker.php">Sign Up (It's Free)</a><br>
                            <a href="workerloginpanel.php">Sign In & Get Started</a>
                        </p>
                    </center>
                </section>
            </div>

            <!-- Admin Section -->
            <div class="col-md-3 fade-in">
                <section class="card">
                    <a href="#" class="image full">
                        <img src="images/women.png" alt="Admin Icon" width="150" height="200">
                    </a>
                    <center>
                        <header>
                            <h2>Admin</h2>
                        </header>
                        <p>
                            <a href="adminloginpanel.php">Sign In & Get Started</a>
                        </p>
                    </center>
                </section>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<div id="marketing" class="fade-in">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <section>
                    <header>
                        <h2>About SARVA</h2>
                    </header>
                    <p><strong>Our Mission:</strong> Farmers struggle with accessing direct markets and face multiple intermediaries.<br>
                            Traditional supply chains lead to lower profits for farmers and higher costs for consumers.<br>
                            Need for a web-based Direct Market Access (DMA) platform to connect farmers directly with buyers.<br></p>
                            <img src="images/about1.jpg" alt="About iAgro" style="width: 75%; height: auto;"><br><br><br>
                    <p><strong>Our Vision:</strong> Solution we are offering:<br>
                            Eliminates middlemen -> farmers can sell directly to consumers, retailers, or wholesalers, ensuring better profits.<br>
                            Fair pricing -> ai-driven price recommendations prevent price manipulation and ensure fair rates.<br>
                            Transparency & trust -> secure transactions and smart contracts build trust between buyers and sellers.<br>
                            Market expansion -> farmers gain access to a larger customer base beyond local markets.<br>
                            Efficient logistics -> streamlined delivery options ensure faster and fresher produce.<br>
                            Financial security -> integrated secure payment gateways reduce delays and fraud.<br>
                            Data-driven insights -> demand forecasting helps farmers plan crops efficiently, reducing wastage.<br>
                            Government & ngo support -> potential collaborations can bring subsidies and support to farmers.<br></p>
                </section>
            </div>
        </div>
    </div>
</div>

<!-- Scroll Animation Script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll(".fade-in");

        function fadeInOnScroll() {
            elements.forEach((element) => {
                const rect = element.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) {
                    element.classList.add("visible");
                }
            });
        }

        window.addEventListener("scroll", fadeInOnScroll);
        fadeInOnScroll();
    });
</script>

<?php include "footer.php"; ?>