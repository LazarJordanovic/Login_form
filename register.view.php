<?php require 'partials/head.php'?>
<?php require 'partials/navbar.php' ?>
<div class="loginbox">
        <img src="img/loginikona.png" class="loginikona">
        <h1>Register Here</h1>
        <form action="register.php" method="post">
            <p>Name:</p>
            <input type="text" name="name" placeholder="Enter your name">
            <p>Email:</p>
            <input type="text" name="email" placeholder="Enter E-mail">
            <p>Password:</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="" value="Register"><br>
        </form>
    </div>
    <?php require 'partials/footer.php'?> 