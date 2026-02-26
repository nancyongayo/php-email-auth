<?php include 'views/templates/header.php'; ?>

<h2>Email Verification</h2>

<?php if ($message === true): ?>
    <div class="message success">
        Your account has been verified successfully!
    </div>
    <div class="center">
        <a href="index.php?action=login">Go to Login</a>
    </div>
<?php else: ?>
    <div class="message error">
        Invalid or expired verification link.
    </div>
<?php endif; ?>

<?php include 'views/templates/footer.php'; ?>