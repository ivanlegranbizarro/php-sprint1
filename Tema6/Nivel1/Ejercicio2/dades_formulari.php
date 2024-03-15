<?php
session_start();

$username = $_POST["username"];

$_SESSION["username"] = $username;

echo 'El username de la sesión es ' . $_SESSION["username"];
