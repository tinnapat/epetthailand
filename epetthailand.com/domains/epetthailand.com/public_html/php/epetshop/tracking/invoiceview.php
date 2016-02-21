<?
require('../../lib/var.php');

$g_log_dir = $g_document_root."/perl/epetshop/invoice";

$id = $_REQUEST["id"];
$filename = $g_log_dir."/".$id.".html";
$file = file($filename);

foreach($file as $linenum => $line) {
	echo($line);
}
?>
