<?php
{
include("session.php");
}
?>
<?php
include("dbconfig.php");
   	   $testid = $_GET['testid'];
   	  $date = date("Y-m-d h:i:sa");
	  $sql1 = "SELECT * FROM test where test_id='$testid'";
	  $result1 = mysqli_query($db,$sql1);
	  $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

      $sql = "INSERT INTO test_data VALUES ('$login_session','$date','1','$testid')";
	  $result = mysqli_query($db,$sql);
	  $rows = mysqli_num_rows($result);
echo "<a href='http://".$row1['link']."'><button ><h5>Click Here to Redirect!!!</h5></button></a>";
 ?>