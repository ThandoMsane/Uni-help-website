<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['email'])) {
    include 'dbh.inc.php';

    $user_info_username = $_SESSION['email'];

    $q = "SELECT * FROM users WHERE email = '$user_info_username'";
    $pq = $PDO->prepare($conn);
    $pq->execute();

    $basic_user_info = $pq->fetchAll();
    $basic_user_info = $basic_user_info[0];

    $ca = "SELECT * FROM c_applications WHERE username = '$user_info_username'";
    $pc = $PDO->prepare($ca);
    $pc->execute();

    $user_applications = $pc->fetchAll();

    $isApplied = 0;

    if (sizeof($user_applications) > 0) {
        $isApplied = 1;
    }
}