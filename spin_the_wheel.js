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

// Function to update the wallet based on the reward won
function updateWallet(reward) {
    var coins = parseInt(document.getElementById("coins").textContent.split(":")[1].trim());
    var coupons = parseInt(document.getElementById("coupons").textContent.split(":")[1].trim());
    var discount = parseInt(document.getElementById("discount").textContent.split(":")[1].trim());
    var shipping = document.getElementById("shipping").textContent.split(":")[1].trim();

    // Update wallet based on the reward won
    switch (reward) {
        case "20 Coins":
            coins += 20;
            break;
        case "3 Coupons":
            coupons += 3;
            break;
        case "20% Off":
            discount = 20; // Assuming discount is in percentage
            break;
        case "Free Shipping":
            shipping = "Yes";
            break;
        default:
            break;
    }

    // Update HTML elements with new wallet values
    document.getElementById("coins").textContent = "Coins: " + coins;
    document.getElementById("coupons").textContent = "Coupons: " + coupons;
    document.getElementById("discount").textContent = "Discount: " + discount + "%";
    document.getElementById("shipping").textContent = "Free Shipping: " + shipping;
}
