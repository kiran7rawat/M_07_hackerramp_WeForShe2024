<?php
include 'databaseconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accessories</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Fira+Code:wght@300..700&family=Hind+Siliguri:wght@300;400;500;600;700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Protest+Riot&family=Tiro+Bangla:ital@0;1&display=swap" rel="stylesheet">

    <!-- cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- css link -->
    <link rel="stylesheet" href="styless.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="Logo.png">
    <style>
        body {
            background-color: #f0f0f0; /* Add your desired background color */
        }
        .search-container {
            display: flex;
            align-items: center;
            border: 2px solid grey;
            border-radius: 25px;
            padding: 5px;
            width:500px;
            background-color: #fff;
            margin-left:50px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .search-input {
            border: none;
            outline: none;
            padding: 10px;
            border-radius: 10px;
            flex-grow: 1;
            font-size: 16px;
            width:100%;
            min-width: 200px;
        }

        .search-button {
            background: none;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 0 5px;
        }

        .search-button img {
            width: 20px;
            height: 20px;
        }

        .search-input::placeholder {
            color: #999;
        }

        .container {
            text-align: center; /* Center align contents */
        }

        .wheel-container {
            display: inline-block;
            position: relative;
            margin-bottom: 30px;
        }

        #wheel {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 0 auto;
        }

        #arrow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #spinButton {
            margin-top: 20px;
            display: inline-block;
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
        }

        #reward {
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333; /* Adjust color as needed */
        }

        #wallet {
            text-align: left; /* Adjust as per your layout */
        }
    </style>
</head>
<body>
    <!-- <nav class="mb-2 w-100 shadow-sm navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand logo-size" href="home.php"><img src="png/Myntra.png" style="width: 70px; left: 15px; position: relative"/></a>

        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
            <button class="search-button"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7_Ef8p3AiMNU7SmrPBzPrmlRM9kFAR1zYgw&s" alt="Search" /></button>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
        <span class="collapse navbar-collapse">
            <span class="container clearfix">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0 float-right">
                    <li class="nav-item"><a class="nav-link" href="women's collection.php">Women's Section</a></li>
                    <li class="nav-item"><a class="nav-link" href="men's collection.php">Men's Section</a></li>
                    <li class="nav-item"><a class="nav-link" href="customize.php">Kid's section</a></li>
                    <li class="nav-item"><a class="nav-link" href="accessories.php">Game</a></li>
                </ul>
            </span>
        </span>
    </nav> -->
    <header>
        <div class="header_top">
            <div class="logo headhover">
                <a href="home.php"><img src="walmartLogo.svg" alt=""></a>
            </div>
            <div class="head_sec2 headhover">
                <span class="material-symbols-outlined">
                    widgets
                </span>
                <p class="hsec2_bottom">Departments</p>
            </div>
            <div class="head_sec3 headhover">
                <span class="material-symbols-outlined">
                    view_cozy
                    </span>
                <p class="hsec2_right">Services</p>
            </div>
            <div class="headsearch">
                <div class="input_search">
                    <input type="search" placeholder="Search evrything at Walmart online and in store">
                </div>
                <div class="icon_search">
                    <span class="material-symbols-outlined">
                        search
                        </span>
                </div>
            </div>
            <div class="headsec5 headhover">
                <div class="hs5_icon">
                    <span class="material-symbols-outlined">
                        favorite
                    </span>
                </div>
                <div class="hs5_para">
                    <p class="up">Reorder</p>
                    <p class="down">My Items</p>
                </div>
            </div>
            <div class="headsec5 headhover">
                <div class="hs5_icon">
                    <span class="material-symbols-outlined">
                        person
                        </span>
                </div>
                <div class="hs5_para">
                    <p class="up">Sign In</p>
                    <p class="down">Account</p>
                </div>
            </div>
            <div class="head_cart headhover">
                <div class="carticon">
                    <span class="material-symbols-outlined">
                        shopping_cart
                        </span>
                        <p class="price">$0.00</p>
                </div>
                <div class="cart_value">
                    <p class="value">0</p>
                </div>
            </div>
        </div>

        <div class="header_bootom">
            <div class="headbtm_left">
                <div class="hbtm_left">
                    <div class="hbleft_icon">
                        <span class="material-symbols-outlined">
                            handshake
                            </span>
                    </div>
                    <div class="hbleft_info">
                        <p>How do you want your items?
                        </p>
                    </div>
                    <div class="hbleft1_icon2">
                        <span class="material-symbols-outlined">
                            expand_more
                            </span>
                    </div>
                    <div class="spaser">
                        <pre>  |  </pre>
                    </div>
                    <div class="hbleft_icon3">
                        <span class="material-symbols-outlined">
                            location_on
                            </span>
                    </div>
                    <div class="hbleft_info2">
                        <p>Chandigarh, 85945</p>
                    </div>
                    <div class="hbleft_icon4">
                        <span class="material-symbols-outlined">
                            warehouse
                        </span>
                    </div>
                    <div class="hbleft_info3">
                        <p>Chandigarh Supercenter</p>
                    </div>

                </div>
            </div>
            <div class="headbtm_right">
                    <p class="underline"><a href="home.php" style="color: white;">Home</a></p>
                    <p class="underline"><a href="women's collection.php" style="color: white;">Women's</a></p>
                    <p class="underline"><a href="customize.php" style="color: white;">Virtual</a></p>
					<p class="underline"><a href="men's collection.php" style="color: white;">Men</a></p>
                    <p class="underline"><a href="accessories.php" style="color: white;">Games</a></p>
                    <p class="underline">Black & Unlimited</p>
                    <p class="underline">Fashion</p>
                    <p class="underline">Electronics</p>
            </div>
        </div>
</header>

    <!-- Game Section -->
    <div class="container mb-5 mt-5">
        <h1>Spin the Wheel and Win!</h1>
        <div class="wheel-container">
            <div id="wheel">
                <svg width="300" height="300" viewBox="0 0 300 300">
                    <circle cx="150" cy="150" r="150" fill="#f9a825" />
                    <path d="M150 150 L150 0 A150 150 0 0 1 267.7 90 Z" fill="#ffcc80" />
                    <path d="M150 150 L267.7 90 A150 150 0 0 1 293.3 206.7 Z" fill="#ffff8d" />
                    <path d="M150 150 L293.3 206.7 A150 150 0 0 1 206.7 293.3 Z" fill="#b9f6ca" />
                    <path d="M150 150 L206.7 293.3 A150 150 0 0 1 90 267.7 Z" fill="#f48fb1" />
                    <text x="40" y="40" transform="rotate(18, 40, 40)" fill="#fff" font-size="16">20 Coins</text>
                    <text x="150" y="40" transform="rotate(90, 150, 40)" fill="#fff" font-size="16">3 Coupons</text>
                    <text x="260" y="40" transform="rotate(162, 260, 40)" fill="#fff" font-size="16">20% Off</text>
                    <text x="150" y="260" transform="rotate(-90, 150, 260)" fill="#fff" font-size="16">Free Shipping</text>
                </svg>
                <div id="arrow"></div>
            </div>
        </div>
        <button id="spinButton" onclick="spinWheel()">Spin</button>
        <div id="reward"></div>
        <div id="wallet">
            <h2>Wallet</h2>
            <div id="coins">Coins: 0</div>
            <div id="coupons">Coupons: 0</div>
            <div id="discount">Discount: 0%</div>
            <div id="shipping">Free Shipping: No</div>
        </div>
    </div>
    <!-- Script for Product Page Redirection -->
    <script type="text/javascript">
        function product_page(id) {
            $.ajax({
                url: "product-id-set.php",
                type: "POST",
                data: {'id': id},
                success: function(data) {
                    window.location.href = "product-page.php";
                }
            });
        }

        // Function to spin the wheel
        function spinWheel() {
            // Disable the spin button during animation to prevent multiple spins
            document.getElementById("spinButton").disabled = true;

            // Determine the number of rotations (can be random for visual effect)
            var rotations = Math.floor(Math.random() * 10) + 5; // Random number of rotations between 5 to 14

            // Calculate the rotation angle based on the number of rotations
            var baseAngle = 360 * rotations;
            var finalAngle = baseAngle + getRandomInt(0, 360); // Add random final angle for more variation

            // Set duration of the spin animation (in milliseconds)
            var duration = 3000; // Adjust as needed

            // CSS animation for the wheel
            document.getElementById("wheel").style.transition = 'transform ' + duration / 1000 + 's ease-out';
            document.getElementById("wheel").style.transform = 'rotate(' + finalAngle + 'deg)';

            // Simulate the delay for the animation
            setTimeout(function() {
                // After animation completes, determine and display the reward
                var rewards = ["20 Coins", "3 Coupons", "20% Off", "Free Shipping"];
                var randomIndex = Math.floor(Math.random() * rewards.length);
                var reward = rewards[randomIndex];

                // Display the reward
                document.getElementById("reward").innerHTML = "You won: " + reward;

                // Update wallet based on the reward won
                updateWallet(reward);

                // Re-enable the spin button for the next spin
                document.getElementById("spinButton").disabled = false;
            }, duration);
        }

        // Function to get a random integer between min and max (inclusive)
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        // Function to update wallet based on the reward
        function updateWallet(reward) {
            var coins = parseInt(document.getElementById("coins").innerText.split(":")[1].trim());
            var coupons = parseInt(document.getElementById("coupons").innerText.split(":")[1].trim());
            var discount = parseInt(document.getElementById("discount").innerText.split(":")[1].trim());
            var shipping = document.getElementById("shipping").innerText.split(":")[1].trim();

            if (reward === "20 Coins") {
                coins += 20;
            } else if (reward === "3 Coupons") {
                coupons += 1;
            } else if (reward === "20% Off") {
                discount = 20;
            } else if (reward === "Free Shipping") {
                shipping = "Yes";
            }

            // Update the wallet display
            document.getElementById("coins").innerText = "Coins: " + coins;
            document.getElementById("coupons").innerText = "Coupons: " + coupons;
            document.getElementById("discount").innerText = "Discount: " + discount + "%";
            document.getElementById("shipping").innerText = "Free Shipping: " + shipping;
        }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
