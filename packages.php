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
       <!-- Hero Section -->
                <header id="home" class="bg-light text-dark text-center py-5">
                    <div class="container">
                        <p>Your journey begins here. Explore the world with us!</p>
                        <a href="#packages" class="btn btn-primary">Explore Tour Packages</a>
                    </div>
                </header>
    <div id="main">
                <div class="container">
                    <div class="row">
                        <?php
                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img src="\greyhawktour\images\images' . $row["image"] . '" class="card-img-top" alt="' . $row["package_name"] . '">
                                                <div class="card-body">
                                                    <h5 class="card-title">' . $row["package_name"] . '</h5>
                                                    <p class="card-text">' . $row["description"] . '</p>
                                                    <p class="card-text"><strong>Price: Php' . $row["price"] . '</strong></p>
                                                    <a href="#" class="btn btn-primary">Book Now</a>
                                                </div>
                                            </div>
                                        </div>';
                                } 
                            } else {
                                echo "No tour packages available.";
                            }
                            $conn->close();
                        ?>
                    </div>
                </div>

    </div>
</div>



<?php
    require 'footer.php';
?> 
