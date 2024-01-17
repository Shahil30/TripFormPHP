<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <?php
$server = "sql302.infinityfree.com";
$username = "if0_35807422";
$password = "Shahil9875";
$dbname = "if0_35807422_trip";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Fetch data from the database
    $query = "SELECT * FROM `trip`";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        // Output data in a table
        echo "<table>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Age</th>";
        echo "<th>Gender</th>";
        echo "<th>Email</th>";
        echo "<th>Other</th>";
        echo "<th>Timestamp</th>";
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["other"] . "</td>";
            echo "<td>" . $row["dt"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No data found";
    }

    $con->close();
    ?>

</body>

</html>