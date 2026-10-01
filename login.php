
<!DOCTYPE html>
<html>
<head>
    <title>Login - JX Hypercar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="auth-page">
    <div class="auth-card">
        <div class="brand">JX <span>HYPERCAR</span></div>
        <p class="eyebrow">WELCOME BACK</p>
        <h1>Login</h1>
        <p class="muted">Login to access your JX Hypercar account.</p>
        <?php if($error): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <form method="POST">
            <label>Email</label>
            <input type="email" name="email">
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit" class="btn">LOGIN</button>
        </form>
        <p class="switch">
            Don't have an account?
            <a href="signup.php">Sign Up</a>
        </p>
    </div>
</div>

</body>
</html>