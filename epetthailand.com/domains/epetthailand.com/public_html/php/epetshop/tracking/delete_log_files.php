<?
$log_files = array();
$log_files[] = "/var/log/httpd/access_log";
$log_files[] = "/var/log/httpd/error_log";

foreach ($log_files as $log_file) {
	$filename = getenv("SITE_ROOT").$log_file;
	if (!$handle = fopen($filename, "w")) {
		echo "Cannot open file ($filename)";
		exit;
	}

	if (fwrite($handle, "") === FALSE) {
		echo "Cannot write to file ($filename)";
		exit;
	}

	echo "Success, clearing log file ($filename)<p>";
	fclose($handle);
}

?>