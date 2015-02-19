<?php

include('Connection/connect.php'); 
?>
<html>

 <?php 
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"Select P.Part_Pic,CONCAT(P.Part_LName,', ',P.Part_FName,' ',P.Part_MName) fullname,ACE.ACE_Secnum 
							from Participants p
							INNER JOIN Attended_CulturalEvents ACE ON ACE.Part_ID = P.Part_ID
							INNER JOIN Cultural_Events CE ON CE.Cul_ID = ACE.Cul_ID
							INNER JOIN Event_Category EC ON EC.Cul_ID = CE.Cul_ID
							Where EC.Category_JudgeType = 'ONLINE' and P.Part_Status = 'Active'");


while($row = mysqli_fetch_array($result))
   {	
   
		$Name = $row['fullname'];
		$image_data= $row ['Part_Pic'];
		$num = $row['ACE_Secnum'];
		
		?>
	
	
	<div class = "sample"><center>
	<h3>Contestant No.<?php echo $num ?> </h3>
	<img src="data:image/jpeg;base64,<?php echo base64_encode( $image_data ); ?>"   width="144" height="144"/></br>
	<form action = "get_Pass.php" method = "post" >
	<?php echo $Name ?>
	
	</br></br>
			<input type= "hidden" type="text" name = "fulname" class = "fulname" value = "<?php echo $Name ?>">
			Password: <input  class = "search-query span2" type="text" name="password" style = "width: 95%;>&nbsp;
			<span class="CSSButton">
			<input class = "btn btn-large btn-inverse" type = "Submit" name = "Submit" value = "Vote">
			</span>
			
	</form>
	</center></br>
	</div>
	


 <?php
   }
  
mysqli_close($con);
?>
</ul>
</div>
 </div>
</html>