<?php require 'partials/head.php'?>
<?php require 'partials/navbar.php' ?>
<div class="loginbox">
        <img src="img/loginikona.png" class="loginikona">
        <h1>Login Here</h1>
        <form action="login.php" method="post">
            <p>E-mail:</p>
            <input type="text" name="email" placeholder="Enter E-mail">
            <p>Password:</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="" value="Login"><br>
           </form>
        <a href="register.view.php">Don`t have an acount?</a><br>
    </div>
    <?php require 'partials/footer.php' ?>