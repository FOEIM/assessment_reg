<?php
/*error_reporting(1);*/
$mysqli = mysqli_connect("localhost","foeimorg","foeim2021@","foeimorg_combine");

$email = $_POST['email'];

if(isset($_POST['confirm']))
{
$foeim = "SELECT * FROM assessment_data WHERE user_email ='$email'";
        $rs = mysqli_query($mysqli ,$foeim);
        $numUsers = mysqli_num_rows($rs);

        if($numUsers > 0) {
            header('location: https://foeim.github.io/assessment_reg/index.php?err=<font color="red">Alredy Regiserterd and you cannot do this again</font>');
        }
  else
  {
$to = $email;
$subject = "FOEIM IT Department";

$message = "
<html>
<head>
<title>One Time User Registration Info</title>
</head>
<body>
<p>This email is only for registered user to verify.</p>
<table>
<tr>
<th>Author</th>
<th>Verify Your Email</th>
</tr>
<tr>
<td>FOEIM</td>
<td><a href='https://foeim.github.io/assessment_reg/engine/source/?email=$to'><button>Click Here To Verify!</button></a></td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <team.it@foeim.org>' . "\r\n";
$headers .= 'Cc: office@foeim.org' . "\r\n";

mail($to,$subject,$message,$headers);

header('location: https://foeim.github.io/assessment_reg/index.php?err=<font color="green">Please Check Your Email Inbox or in Spam</font>');


  }

}

?>
