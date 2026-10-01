
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JX Hypercar | Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body class="auth-page">
<div id="loader">
    <div class="loader-logo">JX</div>
    <div class="loader-line"><span></span></div>
    <p>ENTERING JX HYPERCAR</p>
</div>
<div class="auth-card">
    <div class="brand">JX <span>HYPERCAR</span></div>
    <p class="eyebrow">PRIVATE COLLECTION</p>
    <h1>Welcome back.</h1>
    <p class="muted">Sign in to enter the JX Hypercar showroom.</p>
    <form action="login_process.php" method="POST">
        <label>Email</label>
        <input type="email" name="email" placeholder="you@example.com" required>
        <label>Password</label>
        <input type="password" name="password" placeholder="••••••••" required>
        <button class="btn" type="submit">ENTER SHOWROOM <span>→</span></button>
    </form>
    <p class="switch">New to JX? <a href="signup.php">Create an account</a></p>
</div>
<script src="js/script.js"></script>
</body>
</html>