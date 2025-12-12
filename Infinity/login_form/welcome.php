<?php
session_start();
?>
<html>
<body>
<h1 align="center">Welcome</h1>
<h1 align="center">
<?php
echo $_SESSION['login_user'];
?>
</h1>
</body>
</html>