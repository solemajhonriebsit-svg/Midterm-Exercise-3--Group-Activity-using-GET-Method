<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP GET Method Example</title>
</head>
<body>

    <h2>User Information Form</h2>

    <form action="index.php" method="GET">
        <label for="username">Name:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <hr>

    <?php
    if (isset($_GET['username']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['username']);
        $age = htmlspecialchars($_GET['age']);

        echo "<h3>Submitted Details:</h3>";
        echo "<p><strong>Name:</strong> " . $name . "</p>";
        echo "<p><strong>Age:</strong> " . $age . " years old</p>";
    }
    ?>

</body>
</html>