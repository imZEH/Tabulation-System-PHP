<?php

include('Connection/connect.php'); 
?>
<html>

 <?php 
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT T.Team_Logo,a.CODE,a.Team_Name,(a.TOTAL + b.TOTAL) Score FROM rpt_overall_cultural a JOIN rpt_overall_sports b ON a.code = b.code JOIN Teams T ON T.Team_ID = a.CODE group by a.code ASC");


while($row = mysqli_fetch_array($result))
   {	
   
		$Name = $row['Team_Name'];
		$image_data= $row ['Team_Logo'];
		$num = $row['Score'];
		$english_format_number = number_format($num, 2, '.', '');
		
		?>
	
	
			<div class ="sample">
				<center><img src="data:image/jpeg;base64,<?php echo base64_encode( $image_data ); ?>"   width="144" height="144"/>
				<p><?php echo $Name ;?></p></center>
				<div class="progress progress-warning progress-striped active" style="margin-bottom: 9px;">
				<div class="bar" style="width: 100%">Score: <?php echo $english_format_number; ?></div>
				</div>
			</div>
	


 <?php
   }
  
mysqli_close($con);
?>

 
</html>