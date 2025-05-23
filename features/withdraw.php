<?php
session_start();
$error = '';

echo '<pre>';
print_r(array_keys($_SERVER));
echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $amount = floatval($_POST['amount']);
    if ($amount > $_SESSION['balance']) {
        $error = 'Insufficient funds.';
    } else {
        $_SESSION['balance'] -= $amount;
        header('Location: balance.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdraw Money</title>
</head>
<body>
    <h1>Withdraw Money</h1>
    <form method="POST">
        <label for="amount">Amount:</label>
        <input type="number" name="amount" step="0.01" required>
        <button type="submit">Withdraw</button>
    </form>
    <?php if ($error): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
</body>
</html>
