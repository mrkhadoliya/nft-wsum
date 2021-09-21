<?php

$link = mysqli_connect("localhost", "pramod_ANKIT", "p5uB8aRy,@^@", "pramod_wsumArt_latest");

// Check connection
if ($link) {
    //  echo "<script>alert('Connection Success')</script>";
}
else
{
  die("Connection failed: " . $link->connect_error);
}
?>