<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JX Hypercar | Showroom</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="loader">
    <div class="loader-logo">JX</div>
    <div class="loader-line"><span></span></div>
    <p>LOADING COLLECTION</p>
</div>
<header class="navbar">
    <a class="brand" href="home.php">JX <span>HYPERCAR</span></a>
    <nav>
        <a href="#home">HOME</a>
        <a href="#collection">COLLECTION</a>
        <a href="#about">ABOUT</a>
        <?php if($_SESSION["role"] === "admin"): ?>
        <a href="admin/dashboard.php">ADMIN</a>
        <?php endif; ?>
        <?php if($_SESSION["role"] === "staff"): ?>
        <a href="staff/dashboard.php">STAFF</a>
        <?php endif; ?>
        <?php if($_SESSION["role"] === "customer"): ?>
        <a href="my_orders.php">MY ORDERS</a>
        <?php endif; ?>
        <a class="logout" href="logout.php">LOGOUT</a>
    </nav>
</header>
<main>
<section class="hero" id="home">
    <div class="hero-content">
        <p class="eyebrow">THE ART OF SPEED</p>
        <h1>ENGINEERED<br><span>WITHOUT LIMITS.</span></h1>
        <p>Discover a curated collection of the world's most extraordinary hypercars.</p>
        <a class="btn hero-btn" href="#collection">EXPLORE COLLECTION <span>↓</span></a>
    </div>
    <div class="hero-number">01 / 03</div>
</section>
<section class="collection" id="collection">
    <div class="section-heading">
        <div>
            <p class="eyebrow">SELECTED MACHINES</p>
            <h2>The Collection</h2>
        </div>
        <p>Performance beyond imagination.<br>Crafted for the few.</p>
    </div>
    <div class="car-grid">
        <article class="car-card">
            <div class="car-image bugatti">BUGATTI</div>
            <div class="car-info">
                <p class="eyebrow">BUGATTI</p>
                <h3>Tourbillon</h3>
                <p>8.3L V16 • 1,800 HP • 445 KM/H</p>
                <strong>RM 18,000,000</strong>
            </div>
        </article>
        <article class="car-card">
            <div class="car-image koenigsegg">KOENIGSEGG</div>
            <div class="car-info">
                <p class="eyebrow">KOENIGSEGG</p>
                <h3>Jesko Absolut</h3>
                <p>5.0L V8 • 1,600 HP • 500+ KM/H</p>
                <strong>RM 14,000,000</strong>
            </div>
        </article>
        <article class="car-card">
            <div class="car-image pagani">PAGANI</div>
            <div class="car-info">
                <p class="eyebrow">PAGANI</p>
                <h3>Utopia</h3>
                <p>6.0L V12 • 864 HP • 350 KM/H</p>
                <strong>RM 12,000,000</strong>
            </div>
        </article>
    </div>
</section>
<section class="statement" id="about">
    <p class="eyebrow">JX HYPERCAR</p>
    <h2>Not transportation.<br><span>An experience.</span></h2>
</section>
</main>
<footer>
    <p>© 2026 JX Hypercar</p>
    <a href="logout.php">LOGOUT</a>
</footer>
<script src="js/script.js"></script>
</body>
</html>
