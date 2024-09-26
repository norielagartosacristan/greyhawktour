<?php 
    require 'header.php';
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
                
<body>
    <!-- Fixed Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Greyhawk Travel and Tours</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#packages">Tour Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hotels">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#flights">Flights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="bg-light text-dark text-center py-5">
        <div class="container">
            <h1>Welcome to Greyhawk Travel and Tours</h1>
            <p>Your journey begins here. Explore the world with us!</p>
            <a href="#packages" class="btn btn-primary">Explore Tour Packages</a>
        </div>
    </header>

    <!-- Tour Packages Section -->
    <section id="packages" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Tour Packages</h2>
            <div class="row">
                <!-- Example Package 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="tour1.jpg" class="card-img-top" alt="Tour Package 1">
                        <div class="card-body">
                            <h5 class="card-title">Beach Escape</h5>
                            <p class="card-text">Enjoy a relaxing vacation on the pristine beaches.</p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Example Package 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="tour2.jpg" class="card-img-top" alt="Tour Package 2">
                        <div class="card-body">
                            <h5 class="card-title">Mountain Adventure</h5>
                            <p class="card-text">Explore breathtaking mountain views and nature.</p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Example Package 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="tour3.jpg" class="card-img-top" alt="Tour Package 3">
                        <div class="card-body">
                            <h5 class="card-title">City Tour</h5>
                            <p class="card-text">Discover the best of city life with guided tours.</p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Greyhawk Travel and Tours. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-8jWzLAXNZhOQD+2vxr5qHOJScFswTezPVxdQgiI7qdCzIcZcW/wN2i+KjyITfg0c" crossorigin="anonymous"></script>
</body>
</html>

    </div>
</div>



<?php
    require 'footer.php';
?> 
