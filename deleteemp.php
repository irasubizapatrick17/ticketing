<?php
if (isset($_GET['deleteid'])) {
	$deleteid = $_GET['deleteid'];
	include 'connect.php';
	$sql = $con ->query("DELETE FROM employee WHERE id = '$deleteid'");
	echo '<p style="color: green;">courier of id '.$deleteid.' had been removed successfully!!</p>';
	header("location: view_employee.php");
}

?>