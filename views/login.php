<?php include 'views/templates/header.php'; ?>

<h2>Login</h2>

<form method="POST">
    <input type="email" name="email" placeholder="Enter Email" required>
    <input type="password" name="password" placeholder="Enter Password" required>
    <button type="submit">Login</button>
</form>

<div class="center">
    <a href="index.php?action=register">Don't have an account? Register</a>
</div>

<?php if (!empty($message)): ?>
    <div class="message <?php echo is_array($message) ? 'success' : 'error'; ?>">
        <?php echo is_array($message) ? "Login successful!" : $message; ?>
    </div>
<?php endif; ?>

<?php include 'views/templates/footer.php'; ?>