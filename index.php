<?php
require_once("connection.php");

$full_date = date('Y-m-d H:i:s');
$date = date('Y-m-d H:i:s');
$time = date('H:i');


if (isset($_POST['send'])) {

	if (isset($_POST['head'])) {
		$head = $_POST['head'];
	}else{
		$head = "";
	}

	if (isset($_POST['taskid'])) {
		$taskid = $_POST['taskid'];
	}else{
		$taskid = "";
	}

	if (isset($_POST['usersection'])) {
		$user = $_POST['usersection'];
	}else{
		$user = "";
	}

	if (isset($_POST['task'])) {
		$task = $_POST['task'];
	}else{
		$task = "";
	}

	if (isset($_POST['solution'])) {
		$solution = $_POST['solution'];
	}else{
		$solution = "";
	}

	if (isset($_POST['status'])) {
		$status = $_POST['status'];
	}else{
		$status = "";
	}

	if (isset($_POST['complete'])) {
		$complete = $_POST['complete'];
	}else{
		$complete = "";
	}

	if (isset($_POST['priority'])) {
		$priority = $_POST['priority'];
	}else{
		$priority = "";
	}

	if (isset($_POST['dateofentry'])) {
		$dateofentry = $_POST['dateofentry'];
	}else{
		$dateofentry = "";
	}

	if (isset($_POST['estimatedtime'])) {
		$estimatedtime = $_POST['estimatedtime'];
	}else{
		$estimatedtime = "";
	}

	if (isset($_POST['dueday'])) {
		$dueday = $_POST['dueday'];
	}else{
		$dueday = "";
	}

	if (isset($_POST['lengthofresponse'])) {
		$lengthofresponse = $_POST['lengthofresponse'];
	}else{
		$lengthofresponse = "";
	}

	if (isset($_POST['resources'])) {
		$resources = $_POST['resources'];
	}else{
		$resources = "";
	}

	if (isset($_POST['constraints'])) {
		$constraints = $_POST['constraints'];
	}else{
		$constraints = "";
	}

	if (isset($_POST['assignedto'])) {
		$assignedto = $_POST['assignedto'];
	}else{
		$assignedto = "";
	}

	$sql = "INSERT INTO overall
				(head,taskid,usersection,task,solution,thestatus,complete,priority,dateoftaskacceptance,estimatedtime,dueday,lengthofresponse,resourcesused,constraints,assignedto)

			VALUES
			 ('$head', '$taskid', '$user', '$task', '$solution', '$status', '$complete', '$priority', '$dateofentry', '$estimatedtime', '$dueday', '$lengthofresponse', '$resources', '$constraints', '$assignedto')
			";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}







}






?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="src/css/w3.css">
  <script src="src/js/jquery.js"></script>
<style>
	body{
		font-family: trebuchet ms;
	}

	input, select, textarea{
		width: 300px;
		height: 35px;
		border: 1px solid #ccc;
		border-radius: 4px;
		padding-left: 8px;
	}

	textarea{
		height: 80px;
	}





</style>
</head>

<body style="padding: 14px">
<div style="font-size: 18px;letter-spacing: 5px" class="w3-center">KEY PERFORMANCE INDEX(KPI) FOR GIS</div>

<br>

<form method="POST" action="Your url" class="w3-form" id="form">

<div class="w3-row w3-border w3-padding">

<div class="w3-quarter w3-padding" style="border-right: 1px solid #ccc;height: 450px">
	<div class="w3-grey w3-text-white w3-padding w3-round w3">FILLED BY TASK GIVER</div>
	<div>
		<p>Head/Supervisor</p>
		<select class="" name="head" required="">
			<option value="">Select Head</option>
			<option value="CTO">CTO</option>
			<option value="HOD Balogun">HOD Balogun</option>
			<option value="Yusuf Amure">Yusuf Amure</option>
			<option value="I.T Support">I.T Support</option>
		</select>
	</div>

	<div>
		<p>Task ID</p>
		<input type="" name="taskid" class="" required="" placeholder="Put in your Task ID...">
	</div>

	<div>
		<p>User Section</p>
		<select name="usersection" required="">
			<option>Select User Section</option>
			<option value="Data Editor">Data Editor</option>
			<option value="Data Analyst">Data Analyst</option>
			<option value="Server Manager">Server Manager</option>
			<option value="Field Survery">Field Survery</option>
			<option value="Data Validator">Data Validator</option>
			<option value="I.T Support">I.T Support</option>
			<option value="Carthography">Carthography</option>
		</select>
	</div>

	<div>
		<p>Task</p>
		<textarea name="task" class="" required="" placeholder="Put in your task..."></textarea>
	</div><br>

	<hr>


</div>


<!-- -- -->

<div class="w3-quarter w3-padding" style="border-right: 1px solid #ccc;height: 450px">

	<div class="w3-grey w3-text-white w3-padding w3-round w3">FILLED BY TASK RECIPIENT</div>

	<div>
		<p>Solution</p>
		<textarea name="solution" class="" required="" placeholder="Your solution..."></textarea>

	</div>

	<div>
		<p>Status</p>
		<select name="status" required="">
			<option>Select Status</option>
			<option value="Draft">Draft</option>
			<option value="Created">Created</option>
			<option value="In Progress">In Progress</option>
			<option value="Cancelled">Cancelled</option>
			<option value="Completed">Completed</option>
			<option value="Verified">Verified</option>
		</select>
	</div>

	<div>
		<p>Complete</p>
		<select name="complete" required="">
			<option>Select Completed Status</option>
			<option value="0%">0%</option>
			<option value="20%">20%</option>
			<option value="Midway">Midway</option>
			<option value="Almost">Almost</option>
			<option value="Completed">Completed</option>
			<option value="Completed but not tested">Completed but not tested</option>
		</select>
	</div>

	
</div>

<!-- -- -->

<div class="w3-quarter w3-padding" style="border-right: 1px solid #ccc;height: 450px">

	<div class="w3-grey w3-text-white w3-padding w3-round w3">FILLED BY TASK GIVER</div>

	<div>
		<p>Priority</p>
		<select name="priority" required="">
			<option value="">Select Status</option>
			<option value="Lowest">Lowest</option>
			<option value="Low">Low</option>
			<option value="Normal">Normal</option>
			<option value="High">High</option>
			<option value="Highest">Highest</option>
			<option value="Urgent">Urgent</option>
		</select>
	</div>

	<div>
		<p>Date of Entry</p>
		<input type="" name="dateofentry" class="" required="" placeholder="Your date of entry...">
	</div>

	<div>
		<p>Estimated time of response</p>
		<input type="number" name="estimatedtime" class="" required="" placeholder="How many minutes?" style="width: 250px"> 
		<label style="color: grey">min</label>
	</div>

	
</div>

<!-- -- -->

<div class="w3-quarter w3-padding">
	
	<div class="w3-grey w3-text-white w3-padding w3-round w3">FILLED BY TASK RECIPIENT</div>

	<div>
		<p>Due Day</p>
		<input type="" name="dueday" class="" required="" placeholder="Enter your due day...">
	</div>

	<div>
		<p>Length of response</p>
		<input type="" name="lengthofresponse" class="" required="" placeholder="Enter your length of response">
	</div>

	<div>
		<p>Resources Used</p>
		<input type="" name="resources" class="" required="" placeholder="What are the resources you used?">
	</div>

	<div>
		<p>Constraints</p>
		<input type="" name="constraints" class="" required="" placeholder="Any constraints?">
	</div>

	
</div>

<!-- -- -->

</div>


<div class="w3-center">

	<div class="">
		<p>Assigned to</p>
		<select name="assignedto" required="">
			<option value="">Select who to assign to...</option>
			<option value="Lowest">Mr Alex Onwodi</option>
			<option value="Low">Mr Inyene Etukudo</option>
			<option value="Normal">Mr Yusuph Amure</option>
			<option value="High">Mr Lawal Taiwo</option>
			<option value="Highest">Mr Kelechi Njoku</option>
			<option value="Urgent">Mr Okemefune</option>
			<option value="Urgent">Mr Jatto</option>
			<option value="Urgent">Miss Omozee</option>
		</select>
	</div>

	<div class="">
		<br>
		<input style="color: white;background-color: grey" type="button" onclick="myFunction()" value="Reset form">
		<button name="send" class="w3-button w3-blue w3-text-white w3-round" style="width: 250px;">
			Send
		</button>
	</div>

</div>


</form>


<script type="text/javascript">

	function myFunction() {
	    document.getElementById("form").reset();
	}

</script>


</body>

</html>