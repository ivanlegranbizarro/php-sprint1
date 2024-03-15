<?php
session_start();

$_SESSION["username"] = $_POST["username"];

echo 'El username de la sesión es ' . $_SESSION["username"];
