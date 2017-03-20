<html>
<head><title>Tagncy</title></head>
<body>
<form action="" method="post" name="form1">
<table border="1" width="25%">
<tr><td>Username:</td>
<td><input type="text" name="username" placeholder="Enter Username" required></td>
</tr>
<tr><td>Password:</td><td><input type="password" name="password" placeholder="Password" required></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="submit" id="submit"></td></tr>
</table>
</form>
</body>
</html>
<?php
$uname=$_POST['username'];
$pwd=$_POST['password'];
if (isset($_POST['submit']))
{
echo"Its Working";
}
?>
