<?php
require_once '../../controllers/constants.php';
require_once '../../models/UsersDB.php';

if (isset($_POST['submit'])) {
    // get form data
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$username_email) {
        $_SESSION['signin'] = "Username or Email required";
    } elseif (!$password) {
        $_SESSION['signin'] = "Password Required";
    } else {
        // fetch user from database
        $users = $users_database->displayUsersByUsernameOrEmail($username_email, $username_email);
        if (count($users) == 1) {
            $user_record = $users[0];
            $db_password = $user_record['password'];

            if (password_verify($password, $db_password)) {
                // set session for access control
                $_SESSION['user-id'] = $user_record['user_id'];

                // print($user_record['user_id']);
                // echo '<br>';
                // echo '<pre>';
                // print_r($_SESSION['user-id']);
                // echo '</pre>';

                // log user in
                header('location: http://localhost/YASSINEBOUAQUIL_Chat/views/home.php');
            } else {
                $_SESSION['signin'] = "Please check your input";
            }
        } else {
            $_SESSION['signin'] = "User not found";
        }
    }

    // if any problem, redirect back to signin page with login data
    if (isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location:  http://localhost/HAMZA.MESKI_Chat/views/signin.php');
        die();
    }
} else {
    header('location:  http://localhost/HAMZA.MESKI_Chat/views/signin.php');
    die();
}
?>
