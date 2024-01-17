<?php
$server = "sql302.infinityfree.com";
$username = "if0_35807422";
$password = "Shahil9875";
$dbname = "if0_35807422_trip";

$con = mysqli_connect($server, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $other = isset($_POST['other']) ? $_POST['other'] : '';

    $query = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$other', current_timestamp());";

    if ($con->query($query) === true) {
        echo '<script>alert("Data submitted successfully!");</script>';
    } else {
        echo '<script>alert("Error: $query <br>" . $con->error);</script>';
    }
}
$con->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&family=Salsa&display=swap"
        rel="stylesheet">
</head>

<body>
    <img class="bg" src="bg.jpg" alt="George College">
    <div class="container">
        <h1>Welcome to George College</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="gender">
            <input type="email" name="email" id="email" placeholder="Enter a valid email">
            <textarea name="other" id="desc" cols="30" rows="10" placeholder="other information"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
</body>

</html>