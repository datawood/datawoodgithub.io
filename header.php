<?php
    session_start();
    include_once 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link rel="stylesheet" href="./css/new.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/aos.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
</head>
<body>
    <header>
        <nav class="nav">
            <div class="nav-container">
               <div class="nav-menu-container flex-row">
                    <div class="nav-menu">
                        <div class="nav-brand">
                           <a href="#">Datawood</a>
                        </div>
                        <div class="toggle-collapse">
                            <div class="toggle-icons">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                        <div class="nav-item">
                            <ul class="nav-links flex-row">
                                <li class="nav-link">
                                    <a href="./naturalremedies.php">Home</a>
                                </li>
                                <li class="nav-link">
                                <a href="./gallery.php">Gallery</a>
                                </li>
                                <li class="nav-link">
                                    <a href="./contact.php">Contact</a>
                                </li>
                                <li class="nav-link">
                                    <a href="./datawood.php">Datawood</a>
                                </li>
                                <li class="nav-link">
                                    <a href="./health.php">Health</a>
                                </li>
                             <li class="nav-link">
                                    <a href="./paypal.php">paypal</a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-icons flex-row">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-telegram"></i>
                        </div>
                    </div>
               </div>
              
                <div class="login-container flex-row">
                    <div class="form-elements flex-row">
                        <?php
                            if(isset($_SESSION['userId'])){
                                echo '<form action="includes/logout.inc.php" method="POST">
                                <button class="btn logout-btn" type="submit" name="logout-submit">Logout</button>                
                                </form>';
                                echo '<div class="search">
                                <form action="search.php" method="POST" name="search">
                                <input type="text" name="search" placeholder="Search">
                                <button class="btn search-btn" type="submit" name="submit-search">Search</button> 
                                </form>
                                </div>';
                            }
                            else {
                                echo '<form action="includes/login.inc.php" method="POST">
                                <input type="text" name="mailuid" placeholder="User Name/E-mail">
                                <input type="password" name="pwd" placeholder="Password">
                                <button class="btn-login btn" type="submit" name="login-submit">Login</button>                
                                </form>
                                <div class="signup">
                                    <a href="includes/signup.inc.php" class="btn sign">signup</a>
                                </div> ';
                               
                            }
                        ?>
                    </div>
                </div>
             

            </div>
        </nav>
    </header>