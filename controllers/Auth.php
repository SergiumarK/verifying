<?php
    // importarea documentului de configurare
    require ("../config.php");

    $errors = [
        "register_errors" => []
    ];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if ($_POST["type"] === "REGISTER") {
            // VERIFICARI
            if(empty($_POST["login"])) {
                $errors["register_errors"][] = "Login is required";
            } else if (strlen($_POST["login"]) < 3) {
                $errors["register_errors"][] = "Login must be at least 3 characters long";
            } else if (!filter_var($_POST["login"], FILTER_SANITIZE_STRING)) {
                $errors["register_errors"][] = "Invalid format login";
            }

            if (empty($_POST["email"])) {
                $errors["register_errors"][] = "Email is required";
            } else if (strlen($_POST["email"]) < 3) {
                $errors["register_errors"][] = "Email must be at least 5 characters long";
            } else if (!filter_var($_POST["email"], FILTER_SANITIZE_EMAIL)) {
                $errors["register_errors"][] = "Invalid format email";
            }

            if (empty($_POST["password"])) {
                $errors["register_errors"][] = "Password is required";
            } else if (strlen($_POST["password"]) < 3) {
                $errors["register_errors"][] = "Password must be at least 8 characters long";
            } else if (!filter_var($_POST["password"], FILTER_SANITIZE_STRING)) {
                $errors["register_errors"][] = "Invalid format password";
            }

            if (count($errors["register_errors"]) > 0) {
                $_SESSION["register_errors"] = $errors["register_errors"];
                header("Location: ../views/auth/register.php");
            }

        } else {
            die("403 Forbidden");
        }
    } else {
        die ("Something went wrong");
    }