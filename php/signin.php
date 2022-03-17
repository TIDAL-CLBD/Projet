<?php
    include ('signin.tpl');
    include('user.php'); //class

    if (isset($_POST['submit_signin'])){
        $user = new User($_POST['lastname'], $_POST['firstname'], $_POST['username'], $_POST['password'], $_POST['birthday']);
        $user->insert();
    }
?>