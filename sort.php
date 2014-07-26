<?php
include('Connection/connect.php'); 

$result = mysqli_query($con,"CALL _sorting()");
mysqli_close($con);

?>