<?php 
    require 'header.php';
?>

<?php
include 'C:\ecommerce\htdocs\greyhawktour\includes\dbh.inc.php'; // Include the database connection

// Fetch all tour packages from the database
$sql = "SELECT * FROM tour_packages";
$result = $conn->query($sql);
?>

















<div id="container"> 
    <header>
        <h1>Welcome to Greyhawk Travel and Tours</h1>
        <p>Your gateway to amazing experiences!</p>
    </header>
    <div id="main">
        <div id="tour-packages">
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
        </div>

    </div>
</div>



<?php $conn->close(); // Close the database connection ?>

<?php
    require 'footer.php';
?> 