<?php
include "connect.php";
session_start();
?>
<html>
<head>
<title>Login</title>
</head>
<body>
<center>
<h2>Login Page</h2>
<form action="check.php" method ="post">
Username: <input type="text" name="uname"><br><br>
Password: <input type="password" name="pword"><br><br>
<input type="submit" name="submit" value="Submit"><br>
</form>
</center>
</body>
</html>
<?php if ($_GET) {
$msg = $_GET["msg"];
echo "<center>";
echo "<br><br>" . $msg . "<br>";
echo "</center>";
}
?>