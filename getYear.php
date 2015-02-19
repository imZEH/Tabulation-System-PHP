
<?php
include('Connection/connect.php'); 

$result = mysqli_query($con,"Select YEAR(Cul_Date) as year  from Cultural_Events group by year");
$array = mysqli_fetch_assoc($result);
$value =  $array['year'];
return $value;
?>
