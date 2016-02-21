<?
function is_order_exist($order) {
	$conn = get_connection();
	$sql = "SELECT count(*) FROM ep_order_status WHERE (`order` = '$order')";
	print("\n<code><font color='blue'>".$sql."</font></code>");
	$result = mysql_query($sql, $conn);
	print(mysql_error());
	$row = mysql_fetch_row($result);

	if ($row[0] > 0) {
		return true;
	}
	else {
		return false;
	}
}

function get_all_statuses() {
	$conn = get_connection();
	$sql = "SELECT * FROM ep_status ORDER BY code";
	$result = mysql_query($sql, $conn);

	$statuses = array();
	while ($row = mysql_fetch_array($result)) {
		$statuses[$row["code"]] = $row["description"];
	}
	mysql_free_result($result);
	mysql_close($conn);
	return $statuses;
}

function get_status($code) {
	$statuses = get_all_statuses();
	return $statuses[$code];
}
?>