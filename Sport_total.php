<html>

<?php
$con=mysqli_connect("localhost","root","1234","automated");

$result = mysqli_query($con,"SELECT * FROM rpt_overall_sports R JOIN Teams t ON R.CODE = t.Team_ID;");
echo "<table class = 'table table-bordered table-striped table-condensed'>
<tr>

<th>Team</th>
<th>Total Points</th>

</tr>";

while($row = mysqli_fetch_array($result))
   {
   $score = $row['TOTAL'];
   $english_format_number = number_format($score, 2, '.', '');
  echo "<tr>";
  echo "<td color = blue>" . $row['Team_Name'] . "</td>";
  echo "<td color = blue>" . $english_format_number. "</td>";
  
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);


?>


</html>