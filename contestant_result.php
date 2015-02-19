<?php

include('Connection/connect.php'); 
?>
<html>


 <?php 
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"Select SUM(CS.CrScore) total from Cultural_Events CE
INNER JOIN Event_Category EC ON EC.Cul_ID = CE.Cul_ID
INNER JOIN Criteria_Cultural CC ON CC.Category_ID = EC.Category_ID
INNER JOIN  Criteria_Score CS ON CS.Cr_ID = CC.Cr_ID
INNER JOIN Attended_CulturalEvents ACE ON ACE.ACE_ID = CS.ACE_ID
INNER JOIN Participants P ON P.Part_ID = ACE.Part_ID
Where EC.Category_JudgeType = 'ONLINE' and CE.Cul_Status = 'Active' Group by P.Part_ID Order by total DESC");


while($row = mysqli_fetch_array($result))
   {	
   
		$Score = $row['total'];
		
		?>
	
	
	<div class = "sample">
	<center><img src="images/Tab.jpg"   width="144" height="144"/>
	
		<p>Votes</p></center>
	<div class="progress progress-warning progress-striped active" style="margin-bottom: 9px;">
				<div class="bar" style="width: 100%;font-size:17px"><?php echo $Score ?></div>
				</div>
	</div>
	


 <?php
   }
  
mysqli_close($con);
?>




</div>
 </div>
</html>