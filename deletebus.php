<?php
if (isset($_GET['deleteid'])) {
	$deleteid = $_GET['deleteid'];
	include 'connect.php';
	$sql = $con ->query("DELETE FROM buses WHERE id = '$deleteid'");
	echo '<p style="color: green;">courier of id '.$deleteid.' Buses had been removed successfully!!</p>';
	header("location: view_bus.php");
}

?>