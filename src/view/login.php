<?php if(isset($error)): ?>
    <div class="error">
        <?php echo $error; ?>
    </div>
<?php endif; ?>
<form action="?route=login" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
    <a href="register.php">Register</a>
</form>