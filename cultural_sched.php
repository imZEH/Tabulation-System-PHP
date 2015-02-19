<html>
<ul style = "list-style: none;">
<?php
include('Connection/connect.php'); 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT Cul_Name,Cul_Sched from Cultural_Events Where Cul_Status = 'Active'");

while($row = mysqli_fetch_array($result))
  {
  
  
 $name = $row['Cul_Name'];
 $sched =  $row['Cul_Sched'];
  
  ?>
  <li class= "float:left">
  <div class = "divwrapper">
  <div class = "divinsidewrapper"><p class = "pstyle"></p><?php echo $sched ?></div>
  <a class = "astyle"><?php echo $name ?></a>
  </div>
  </li>
  <?php
  }


mysqli_close($con);
?>
</ul>

<style type = "text/css">
.divwrapper{
	width: 100%;
    border-bottom: #E65ABE solid;
    border-radius: 185px;

}
.divinsidewrapper{
background: #E65ABE;
width: 155px;
height: 155px;
border-radius: 100px;
text-align: center;
margin-left: 170px;
}

.divinsidewrapper:hover{
background: #F571CF;
width: 155px;
height: 155px;
border-radius: 100px;
text-align: center;
margin-left: 170px;
}

.pstyle{
padding: 1.5em 0;
font-size: 21px;
}

.astyle{
float: left;
margin-top: -85px;
margin-left: 441px;
font-size: 30px;
color: #000;
}
</style> 
</html>
