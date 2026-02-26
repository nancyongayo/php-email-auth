<?php include 'views/templates/header.php'; ?>

<h2>Welcome</h2>

<div class="center">
    <p>You are logged in as:</p>
    <strong><?php echo $_SESSION['user']; ?></strong>
</div>

<div class="center" style="margin-top:20px;">
    <a href="index.php?action=logout">
        <button>Logout</button>
    </a>
</div>

<?php include 'views/templates/footer.php'; ?>