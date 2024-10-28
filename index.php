<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <title>Mamba - Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<header class="mainav">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #1A1A1D;">
        <a class=" navbar-brand" href="#">
            <img src="assets/img/logo/trans_bg.png" alt="Logo" class="logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link pink-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pink-link" href="assets/pages/cart.php">Shopping Cart</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle pink-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="assets/pages/login.php">Login</a>
                        <a class="dropdown-item" href="assets/pages/register.php">Register</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="assets/pages/profile.php">Profile</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-2" type="search" placeholder="Search for games" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>


<body>

    <br>
    <br>
    <br>

    <div class="games-section">
    </div>

    <div class="games-section">
        <div class="game-card">
            <img src="assets/img/games/game1.jpg" alt="Game 1" class="game-img">
            <div class="game-info">
                <h3>Cyberpunk</h3>
                <p>Price: 14,99€</p>
                <p>Action, openworld, RPG</p>
            </div>
        </div>

        <div class="game-card">
            <img src="assets/img/games/game2.jpg" alt="Game 2" class="game-img">
            <div class="game-info">
                <h3>GTA V</h3>
                <p>Price: 8,99€</p>
                <p>openworld, action, shooter, crime</p>
            </div>
        </div>

        <div class="game-card">
            <img src="assets/img/games/game3.jpg" alt="Game 3" class="game-img">
            <div class="game-info">
                <h3>No mans sky</h3>
                <p>Price: 15,99€</p>
                <p>RPG, massive world, survival</p>
            </div>
        </div>

        <div class="game-card">
            <img src="assets/img/games/game4.jpg" alt="Game 4" class="game-img">
            <div class="game-info">
                <h3>Forza Horizon 5</h3>
                <p>Price: 29.99€</p>
                <p>Racing, arcade, openworld,</p>
            </div>
        </div>

        <div class="game-card">
            <img src="assets/img/games/game5.jpg" alt="Game 5" class="game-img">
            <div class="game-info">
                <h3>Uncharted 4</h3>
                <p>Price: 4.99€</p>
                <p>Puzzle-solving, action, single player</p>
            </div>
        </div>
    </div>

    <!-- Javascript and Bootstrap links -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/script/script.js"></script>
    <script src="assets/script/bootstrap.min.js"></script>
    <script src="assets/script/script.js"></script>
</body>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5 class="footer-heading">About Us</h5>
                <p>We offer a wide variety of games at affordable prices. Explore, play, and enjoy!</p>
            </div>

            <div class="col-md-4">
                <h5 class="footer-heading">Follow Us</h5>
                <ul class="footer-links social-links">
                    <li><a href="#"><img src="assets/img/social/facebook.png" alt="facebook" class="social-icon"> Facebook</a></li>
                    <li><a href="#"><img src="assets/img/social/twitter.png" alt="twitter" class="social-icon"> Twitter</a></li>
                    <li><a href="#"><img src="assets/img/social/instagram.png" alt="instagram" class="social-icon"> Instagram</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 Black Mamba. @ All rights reserved. (Samuel Lamoš, Dominik Metelka)</p>
        </div>
    </div>
</footer>