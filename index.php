<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User IP Address</title>
</head>
<body>
    <h1>
        <?php
        $ip_address = $_SERVER['REMOTE_ADDR'];
        echo "Your IP address is: " . $ip_address;
        ?>
    </h1>
</body>
</html>
