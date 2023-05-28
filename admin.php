<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurace";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, email, phone, personcount, datetime, note FROM rezervace";

$result = mysqli_query($conn, $sql);

echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Person Count</th><th>Date/Time</th><th>Note</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["phone"] . "</td>";
    echo "<td>" . $row["personcount"] . "</td>";
    echo "<td>" . $row["datetime"] . "</td>";
    echo "<td>" . $row["note"] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>
