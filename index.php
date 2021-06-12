<?php require 'partials/head.php' ?>
    <?php require 'partials/navbar.php' ?>
    <?php 
    session_start();
    if (isset($_SESSION['id'])){
        echo "<h1>Dobrodosli na nasoj aplikaciji</h1>";

    }else{
        echo "<h1>Login or Register</h1>";
    }
    ?>
<?php require 'partials/footer.php' ?>