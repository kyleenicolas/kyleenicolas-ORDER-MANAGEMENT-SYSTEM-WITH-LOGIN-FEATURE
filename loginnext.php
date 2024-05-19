<?php
    $username = ' NICOLAS';
    $password = '123';

    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header("Location: order.php");
        } else {
            header("Location: login.php?error=true");
        }
    } else {
        header("Location: order.php");
    }																																					
?>