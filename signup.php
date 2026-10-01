
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up - JX Hypercar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="auth-page">
    <div class="auth-card">
        <div class="brand">JX <span>HYPERCAR</span></div>

        <p class="eyebrow">JOIN JX HYPERCAR</p>
        <h1>Sign Up</h1>
        <p class="muted">Create your customer account.</p>

        <?php if($error): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <?php if($success): ?>
            <p class="success"><?= htmlspecialchars($success) ?></p>
        <?php endif; ?>

        <form method="POST">
            <label>Name</label>
            <input type="text" name="name">

            <label>Email</label>
            <input type="email" name="email">

            <label>Password</label>
            <input type="password" name="password">

            <button type="submit" class="btn">CREATE ACCOUNT</button>
        </form>

        <p class="switch">
            Already have an account?
            <a href="login.php">Login</a>
        </p>
    </div>
</div>

</body>
</html>
```
