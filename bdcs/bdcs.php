<?php
$dbhost = '116.62.144.194';
$dbuser = 'root';
$dbpass = 'Abc123456';
$db_name = 'exam';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db_name);
//if(! $conn )
//{
//    die('Could not connect: ' . mysqli_error());
//}
//echo '数据库连接成功！';
mysqli_select_db($conn,"exam");
$sql = "SELECT * FROM `exam_tbl`";
$result = mysqli_query($conn,$sql);
$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
$color1 = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
$color2 = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
$color3 = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
$color5 = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
$color6 = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
$color7 = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
echo"<table border=1>
<tr>
<th style='background-color: $color1'>账号</th>

<th style='background-color: $color2'>姓名</th>

<th style='background-color: $color3'>性别</th>

</tr>";
echo "<br>";
while($row = mysqli_fetch_row($result))
{
    echo"<tr>";
    echo"<td style='background-color: $color5'>".$row[0]."</td>";
    echo"<td style='background-color: $color6'>".$row[1]."</td>";
    echo"<td style='background-color: $color7'>".$row[2]."</td>";
    echo"</tr>";
}
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($username)) {
    die('数据输入不完整');
}
$sql = "SELECT * FROM test WHERE 账号='$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$real_username = $row["账号"];
$real_password = $row["账号"];
$name = $row["姓名"];
$conn->close();
if ($real_username == $real_username && $real_password == $password) {
    $welcome = "<script>alert('{$name}，欢迎你，登陆成功')</script>";
    echo $welcome ;
}
else {
    echo "<script>alert('账号和密码不存在'); parent.location.href='bdcs.html'; </script>";
}
echo"</table>";
mysql_close($conn);
?>