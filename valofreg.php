<?php
$con=mysqli_connect("localhost","root","","logindb") or die("Unable to connect");
$query="select * from register";
$result=mysqli_query($con,$query);
?>

<html>
</body>
<?php
while($row=mysqli_fetch_assoc($result))
{
echo $row['username'];
echo $row['email'];
echo $row['mobilenumber'];
echo $row['password'];
echo $row['confirm_password'];
}

?>
</body>
</html>