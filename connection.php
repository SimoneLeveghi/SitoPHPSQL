<?php
    session_start();

    $secretusername = 'user1';
    $secretpassword = '1234';

    if($_SESSION['auth'] == true) {
        header('Location: menu.php');
    }
    else {
        $error = null;

        if(!empty($_POST)) {
            $username = !isset($_POST['username']) ? null : $_POST['username'];
            $username = !isset($_POST['password']) ? null : $_POST['password'];

            if($username == $secretusername && $password == $secretpassword) {
                $_SESSION['auth'] = true;
                header('Location: menu.php');
                return;
            }
            else {
                $error = "Wrong credentials";
            }
        }

        echo $error;
    }

    

?>