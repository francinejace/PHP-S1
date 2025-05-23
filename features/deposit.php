<?php
session_start();
    // Clear previous data
    // unset ($_SESSION['balance']);
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $amount = floatval($_POST['amount']);
        $_SESSION['balance'] += $amount;
        header('Location: balance.php')
        exit();
    }
?>
<!DOCTYPE html>
<html lang = "en"></html>