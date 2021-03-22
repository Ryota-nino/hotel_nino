<?php
require_once "../class/Users.php";

$user = new User();
session_start();

if (isset($_POST['signup'])) {
    $create_result = $user->signUp(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        password_hash($_POST['password'], PASSWORD_DEFAULT),
        $_POST['phone_number'],
        $_POST['card_number'],
    );
} else if (isset($_POST['login'])) {
    $user->login(
        $_POST['email'],
        $_POST['password'],
    );
} else if (isset($_POST['reserve'])) {
    $user->reserve(
        $_SESSION['user_id'],
        $_POST['check_in'],
        $_POST['check_out'],
        $_POST['room_type'],
        $_POST['number_of_people'],
        $_POST['total'],
        $_SERVER['HTTP_REFERER'],
    );
}
