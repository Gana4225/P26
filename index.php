<?php
// Database connection
$servername = "localhost";
$username = "gana";
$password = "gana";
$dbname = "std";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch student data
$sql = "SELECT * FROM std";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Results</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Student Results</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Subject 1</th>
            <th>Subject 2</th>
            <th>Subject 3</th>
            <th>Subject 4</th>
            <th>Subject 5</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["name"]. "</td>
                        <td>" . $row["subject1_grade"]. "</td>
                        <td>" . $row["subject2_grade"]. "</td>
                        <td>" . $row["subject3_grade"]. "</td>
                        <td>" . $row["subject4_grade"]. "</td>
                        <td>" . $row["subject5_grade"]. "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No results found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
