<?php
include 'db.php'; // Include the database connection

// Fetch all tour packages from the database
$sql = "SELECT * FROM tour_packages";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greyhawk Travel and Tours</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Navigation -->
    <nav>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </nav>

    <!-- Hero Section -->
    <header>
        <h1>Welcome to Greyhawk Travel and Tours</h1>
        <p>Your gateway to amazing experiences!</p>
    </header>

    <!-- Tour Packages -->
    <section id="tour-packages">
        <h2>Our Tour Packages</h2>
        <div class="packages">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="package">
                    <h3><?php echo $row['name']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                    <p>Price: $<?php echo $row['price']; ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Greyhawk Travel and Tours. All rights reserved.</p>
    </footer>

</body>
</html>

<?php $conn->close(); // Close the database connection ?>
