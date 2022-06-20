<?php
 //session_start(); 
 
  
include_once 'dbconfig.php';

$oldpass1 = $_SESSION['user_password'];
$clientid = $_SESSION['clientid'];
$useremail = $_SESSION['user_email'];
// username and password sent from form 
$oldpass=$_REQUEST['oldpass']; 
$newpass=$_REQUEST['newpass']; 



if ($oldpass == $oldpass1) {

goto a ;
}
else {
echo "<script>
alert('You have entered the wrong password.');
window.location.href='usersetting.php';
</script>";
}
exit;

a:
//update password-------
$sql2 = "UPDATE user_details SET user_password='".$newpass."' WHERE user_email='".$useremail."' and clientid='".$clientid."'";
   $result2 = mysqli_query($conn,$sql2);
   echo "<script>
alert('Your password has been updated.');
window.location.href='dashboardcheck.php';
</script>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
