<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	include 'connect.php';
	$sql = $con ->query("DELETE FROM buses WHERE id = '$id'");
	echo '<p style="color: green;">courier of id '.$deleteid.' Buses had been removed successfully!!</p>';
	header("location: view_bus.php");
}

?>