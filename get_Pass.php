<?php 
include('Connection/connect.php');

$Pname = $_POST['fulname'];
$Password=$_POST['password'];
if(isset($_POST['Submit'])){

$query = "CALL _getPass('$Password','$Pname')";
$result=mysqli_query($con,$query);

if (trim($Password) == ""){
				$promt = 'Required Field.';
				do_alert($promt)	;
			}
			else{
				
			}

while ($row = mysqli_fetch_assoc($result)){


do_alert($row['prompt']);
    

}
}
function do_alert($row) 
    {
        echo'<script language="JavaScript">
				window.alert("'.$row.'"); 
				window.location = "index.php"</script>';
    }
	
mysqli_free_result($result);
mysqli_close($con);

?>
