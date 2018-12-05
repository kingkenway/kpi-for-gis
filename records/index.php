<?php
require_once("../connection.php");

$sql = "SELECT * FROM overall	";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Records</title>
	 <link rel="stylesheet" href="../src/css/w3.css">
  	<script src="../src/js/jquery.js"></script>
</head>

<style type="text/css">

body{
	font-family: trebuchet ms;
}


table {
    width: 100px;
    display: block;
    border: 1px solid green;
    width: 1500px;
    height: 650px;
    overflow-y: scroll;
}

table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

th, td {
    padding: 15px;
}


</style>

<body>

<div class="w3-container">
  <h2>KPI Result Data</h2>

<!-- <div class="w3-responsive"> -->


<table class="w3-centered w3-small">
  
  <tr>
    	<th>Head</th>
		<th>Taskid</th>
		<th>User section</th>
		<th>Task</th>
		<th>Solution</th>
		<th>Status</th>
		<th>Complete</th>
		<th>Priority</th>
		<th>Date of entry</th>
		<th>Time of entry</th>
		<th>Estimated time</th>
		<th>Date of task acceptance</th>
		<th>Time of task acceptance</th>
		<th>Time response</th>
		<th>Dueday</th>
		<th>Taskexpiry date</th>
		<th>Alert notification</th>
		<th>Length of response</th>
		<th>Resources used</th>
		<th>Constraints</th>
		<th>Assigned to</th>
		<th>Time delivery</th>
		<th>Comments</th>
		<th>Total</th>
		<th>Correctness of task</th>
		<th>Comment by supervisor</th>
		<th>Total</th>
  </tr>
  
  <tbody>

  <?php while ($a = mysqli_fetch_array($result)) { 
  	$head = $a['head'];
	$taskid = $a['taskid'];
	$usersection = $a['usersection'];
	$task = $a['task'];
	$solution = $a['solution'];
	$thestatus = $a['thestatus'];
	$complete = $a['complete'];
	$priority = $a['priority'];
	$dateofentry = $a['dateofentry'];
	$timeofentry = $a['timeofentry'];
	$estimatedtime = $a['estimatedtime'];
	$dateoftaskacceptance = $a['dateoftaskacceptance'];
	$timeoftaskacceptance = $a['timeoftaskacceptance'];
	$timeresponse = $a['timeresponse'];
	$dueday = $a['dueday'];
	$taskexpirydate = $a['taskexpirydate'];
	$alertnotification = $a['alertnotification'];
	$lengthofresponse = $a['lengthofresponse'];
	$resourcesused = $a['resourcesused'];
	$constraints = $a['constraints'];
	$assignedto = $a['assignedto'];
	$timedelivery = $a['timedelivery'];
	$comments = $a['comments'];
	$total = $a['total'];
	$correctnessoftask = $a['correctnessoftask'];
	$commentbysupervisor = $a['commentbysupervisor'];
	$overalltotal = $a['overalltotal'];
?>
	<tr>
		<td><?php echo $head; ?></td>
		<td><?php echo $taskid; ?></td>
		<td><?php echo $usersection; ?></td>
		<td><?php echo $task; ?></td>
		<td><?php echo $solution; ?></td>
		<td><?php echo $thestatus; ?></td>
		<td><?php echo $complete; ?></td>
		<td><?php echo $priority; ?></td>
		<td><?php echo $dateofentry; ?></td>
		<td><?php echo $timeofentry; ?></td>
		<td><?php echo $estimatedtime; ?></td>
		<td><?php echo $dateoftaskacceptance; ?></td>
		<td><?php echo $timeoftaskacceptance; ?></td>
		<td><?php echo $timeresponse; ?></td>
		<td><?php echo $dueday; ?></td>
		<td><?php echo $taskexpirydate; ?></td>
		<td><?php echo $alertnotification; ?></td>
		<td><?php echo $lengthofresponse; ?></td>
		<td><?php echo $resourcesused; ?></td>
		<td><?php echo $constraints; ?></td>
		<td><?php echo $assignedto; ?></td>
		<td><?php echo $timedelivery; ?></td>
		<td><?php echo $comments; ?></td>
		<td><?php echo $total; ?></td>
		<td><?php echo $correctnessoftask; ?></td>
		<td><?php echo $commentbysupervisor; ?></td>
		<td><?php echo $overalltotal; ?></td>
	</tr>

  		
  <?php }  ?>

  </tbody> 

</table>

</div>


</body>
</html>


