<?php

include('Connection/connect.php'); 
?>
<html>
<script>
$(document).ready(function() {
    $('#body').delay(8000).fadeIn(400);
});
</script>

<div id = "body">
<div id = "sample">
<ul>
 <?php 
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM _totalcultural_score f");


while($row = mysqli_fetch_array($result))
   {	
   
		$Name = $row['Team_Name'];
		$image_data= $row ['Points'];;
		
		?>

	<li>
	<div id = "cent_prog">
		<div class = "teamname">
			<img src="data:image/jpeg;base64,<?php echo base64_encode( $image_data ); ?> "   width="80" height="80"/></br>
		</div>
		<div >
			<?php echo $Name ?>
		</div></br>
		<div class = "center">
		<div class = "outter">
		<div class = "inner"  style = "background-color:<?php echo $TColor ?>; width:<?php echo $percent; ?>%"><center><?php echo $percent ?>%</center></div>
		</div></br>
		</div>
	</div>
	</li>

		
	
 <?php
   }
  
mysqli_close($con);
?>

<style tye = "text/css">
	.teamname{
font-size:20px;

}
.center{
align: center;
}
.outter{
	height:30px;	
	width:400px;
	border:solid 10px #000;
	
	border-radius: 13px; 
	font-size:20px;
	
	
}
.inner{
	height:30px;
	color:#34495e;
	
}
	</style>





 </div>
  </div>
</html>