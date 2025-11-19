<?php
// Database connection
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "mcadb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all book records
$query = mysqli_query($conn, "SELECT * FROM book_details ORDER BY id ASC");
?>

<html>
<head>
<title>Display Book Details</title>
</head>
<body>
<center>
<h2>Book Details</h2><br>

<table border="1" cellpadding="8">
<tr>
    <th>Book Number</th>
    <th>Title</th>
    <th>Edition</th>
    <th>Publisher</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['edition'] . "</td>";
    echo "<td>" . $row['publisher'] . "</td>";
    echo "</tr>";
}
?>
</table>
<br>

<!-- Redirect to book_details.php -->
<form action="book_details.php" method="get">
    <input type="submit" value="Add Another Book">
</form>

</center>
</body>
</html>

