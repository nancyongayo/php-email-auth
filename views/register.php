<?php include 'views/templates/header.php'; ?>

<h2>Register</h2>

<form method="POST">
    <input type="email" name="email" placeholder="Enter Email" required>
    <input type="password" name="password" placeholder="Enter Password" required>
    <button type="submit">Register</button>
</form>

<div class="center">
    <a href="index.php?action=login">Already have an account? Login</a>
</div>

<?php if (!empty($message)): ?>
    <div class="message <?php echo $message === true ? 'success' : 'error'; ?>">
        <?php echo $message === true ? "Registration successful! Check your email." : $message; ?>
    </div>
<?php endif; ?>

<?php include 'views/templates/footer.php'; ?>