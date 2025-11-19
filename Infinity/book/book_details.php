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

// Handle form submission
if (isset($_POST['submit'])) {
    $bookno      = $_POST['bookno'];
    $booktitle   = $_POST['booktitle'];
    $bookedition = $_POST['booked'];
    $bookpub     = $_POST['bookpub'];

    $sql = "INSERT INTO book_details (id, title, edition, publisher) 
            VALUES ('$bookno', '$booktitle', '$bookedition', '$bookpub')";
    mysqli_query($conn, $sql);

    // Redirect to display page after insertion
    header("Location: display.php");
    exit();
}
?>

<html>
<head>
<title>Book Details</title>
</head>
<body>
<center>
<h2>Enter Book Details</h2>
<form method="POST">
    Book Number: <input type="text" name="bookno" required><br><br>
    Book Title: <input type="text" name="booktitle" required><br><br>
    Book Edition: <input type="number" name="booked" required><br><br>
    Book Publisher: <input type="text" name="bookpub" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</center>
</body>
</html>

