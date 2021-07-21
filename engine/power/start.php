<?php
/*$mysqli = new mysqli("70.32.23.94","foeimorg","foeim2021@","foeimorg_combine");*/

?>

<?php
$mysqli = mysqli_connect("localhost","foeimorg","foeim2021@","foeimorg_combine");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/* check if server is alive */
if ($mysqli->ping()) {
    printf ("Our connection is ok!\n");
} else {
    printf ("Error: %s\n", $mysqli->error);
}

/* close connection */
$mysqli->close();

?>
