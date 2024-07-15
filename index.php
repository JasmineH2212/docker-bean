<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic PHP Page</title>
</head>
<body>
    <h1>hello.</h1>

    <p>Current server time: <?php echo date('Y-m-d H:i:s'); ?></p>

    <?php
    // Example of a PHP variable and conditional statement
    $name = "Jasmine";
    if ($name == "Jasmine") {
        echo "<p>Welcome to test page, $name!</p>";
    } else {
        echo "<p>Hello, guest!</p>";
    }
    ?>
</body>
</html>
