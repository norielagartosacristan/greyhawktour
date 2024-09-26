<?php
// Database connection settings
$host = 'localhost';
$user = 'root';  // Replace with your DB username
$password = '';  // Replace with your DB password
$dbname = 'greyhawk_travel';  // Replace with your DB name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $package_name = $_POST['package_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // File upload logic
    $target_dir = "C:/ecommerce/htdocs/greyhawktour/images/images"; // Directory to store uploaded images
    $image_name = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image_name;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the file is a valid image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        exit;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, the file already exists.";
        exit;
    }

    // Check file size (limit to 5MB)
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        exit;
    }

    // Allow certain file formats (JPG, JPEG, PNG, GIF)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        exit;
    }

    // Move the uploaded file to the server
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Insert tour package data into database
        $sql = "INSERT INTO tour_packages (package_name, description, price, image) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssis", $package_name, $description, $price, $image_name);

        if ($stmt->execute()) {
            echo "The package has been uploaded successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>
