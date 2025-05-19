<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank System</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, Serif;
            color: rgba(36, 31, 33, 35);
        }
        body {
            background: #2874a6;
        }
        .widget-button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .widget-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Welcome to Simple Bank</h1>
    <ul>
        <li><a href="balance.php" class="widget-button">View Balance</a></li>
        <li><a href="deposit.php" class="widget-button">Deposit Money</a></li>
        <li><a href="withdraw.php" class="widget-button">Withdraw Money</a></li>
    </ul>
</body>
</html>