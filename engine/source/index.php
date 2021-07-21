<?php
error_reporting(1);
$mysqli = mysqli_connect("70.32.23.94","foeimorg","foeim2021@","foeimorg_combine");

$email = $_GET['email'];

$foeim = "SELECT * FROM assessment_data WHERE user_email ='$email'";
        $rs = mysqli_query($mysqli ,$foeim);
        $numUsers = mysqli_num_rows($rs);

        if($numUsers > 0) {
            header('location: https://foeim.github.io/assessment_reg/index.php?err=<font color="red">Alredy Regiserterd and you cannot do this again</font>');
        }
else
{

      $foeim_query = "INSERT INTO assessment_data(user_email) VALUES ('$email')";
        if ($mysqli->query($foeim_query) === TRUE)
        {
            header('location: https://facebook.com/minnyi158');
        }
        else
        {
            echo "Something Went Wrong";
        }
}
?>
