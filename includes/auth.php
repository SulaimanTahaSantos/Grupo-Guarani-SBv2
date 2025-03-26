<?php
session_start();

function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

function requireLogin()
{
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit();
    }
}

function isAdmin()
{
    return isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin';
}

function requireAdmin()
{
    requireLogin();
    if (!isAdmin()) {
        header("Location: index.php");
        exit();
    }
}
