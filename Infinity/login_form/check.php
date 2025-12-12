<?php
include "connect.php";
session_start();
if ($_POST["submit"]) {
$uname = $_POST["uname"];
$pword = $_POST["pword"];
$sql = mysqli_query(
$conn,
"SELECT * FROM loginform WHERE uname='$uname' OR pword='$pword'"
);
while ($row = mysqli_fetch_assoc($sql)) {
$dbuname = $row["uname"];
$dbpword = $row["pword"];
}
if (isset($dbuname) && isset($dbpword)) {
if ($dbuname == $uname && $dbpword == $pword) {
$_SESSION["login_user"] = $uname;
header("location:welcome.php");
} elseif ($dbuname == $uname && $dbpword != $pword) {
header("Location:main.php?msg=Wrong password");
} elseif ($dbuname != $uname && $dbpword == $pword) {
header("Location:main.php?msg=Wrong username");
}
} else {
header("Location:main.php?msg=Wrong username and password");
}
}
?>