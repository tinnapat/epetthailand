<?

require_once("db.php");

/*
 * Converts Thai string into an ASCII-sortable form. The procedure is as follows:
 *
 * 1. For every leading vowel appearing in the string, swap it with the next character. 
 * 2. Append two zero digits to the string.
 * 3. Scan the string from left to right. For each tonal marks, Mai Tai Khoo, or Thantakhat found, 
 *    remove it, append to the string 2 digits representing its original position from the string tail, 
 *    and then append the mark itself.
 *
 * This approach is applicable to the uninternationalized DBMS. One can create an additional 
 * field keeping the ASCII-sortable form, which DBMS can use to sort the entries.
 */
function thai2sortable($input) {
    $output = '';
    $rightbuf = '';
    $len = strlen($input);

    for ($i = 0; $i < $len; $i++) {
        if (isldvowel($input[$i]) && (($i + 1) != $len)) {
            if (!isldvowel($input[$i + 1]) && (!isstone($input[$i +1]))) {
                $output .= $input[$i + 1];
                $output .= $input[$i];
                $i++;
            }
        }
        else if (isstone($input[$i])) {
            $rightbuf.=sprintf("%02d", $len - $i);
            $rightbuf.=$input[$i];
        }
        else {
            $output.=$input[$i];
        }
    }
    return $output."00".$rightbuf;
}

#define isstone(c)    (0xE6<=(c) && (c)<=0xEC)
function isstone($c) {
    return ((chr(0xE6) <= ($c)) && (($c) <= chr(0xEC)));
}

#define isldvowel(c)  (0xE0<=(c) && (c)<=0xE4)
function isldvowel($c) {
    return ((chr(0xE0) <= ($c)) && (($c) <= chr(0xE4)));
}

/****************************************************************************** 
formating MySQL Timestamp to get a propper Output 

Author       : Andreas Kempf
Date         : 1998-04-08

$svDate       : The timestamp from MySQL 
$svDateOutput : YYYY-MM-DD hh:mm:ss 
                DD.MM.YYYY or whatsoever 

   year  = YYYY 
   month = MM 
   day   = DD 
   hour  = hh 
   minute= mm 
   second= ss 
******************************************************************************/ 
function FncChangeTimestamp ($svDate, $svDateOutput) { 
	$year  = substr($svDate,0,4); 
	$month = substr($svDate,4,2); 
	$day   = substr($svDate,6,2); 
	$hour  = substr($svDate,8,2); 
	$minute= substr($svDate,10,2); 
	$sec   = substr($svDate,12,2); 

	$svDateOutput = ereg_replace ("YYYY", $year, $svDateOutput); 
	$svDateOutput = ereg_replace ("MM", $month, $svDateOutput); 
	$svDateOutput = ereg_replace ("DD", $day, $svDateOutput); 
	$svDateOutput = ereg_replace ("hh", $hour, $svDateOutput); 
	$svDateOutput = ereg_replace ("mm", $minute, $svDateOutput); 
	$svDateOutput = ereg_replace ("ss", $sec, $svDateOutput); 

	return $svDateOutput; 
}

/**
 * Verify email format.
 */
function is_valid_email($email) {
	if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) { 
		return false; 
	}
	else { 
		return true; 
	}
}

/**
 * Trim the values of all request parameters.
 */
function trim_all_params() {
	while (list($key, $val) = each($_REQUEST)) {
		$_REQUEST[$key] = trim($val);
	}
}

function check_bad_word($word, $filter_files) {
	// Add default filter file.
    $filter_files[] = getenv("DOCUMENT_ROOT")."/php/lib/rudeword.txt";

	foreach ($filter_files as $filter_file) {
		$filters = file($filter_file);
		for ($i = 0; $i < count($filters); $i++) {
			$filter = trim($filters[$i]);
			$pos = strpos(trim($word), $filter);
			if ($pos === false) {
			}
			else {
				// Save log
				$conn = get_connection();
				$sql = "INSERT INTO log_word_filter".
					   "    (`word`, `filter`, `url`, `ip`, `timestamp`) ".
					   "VALUES('{$word}', '{$filter}', '{$_SERVER['REQUEST_URI']}', '{$_SERVER['REMOTE_ADDR']}', now())";

				mysql_query($sql, $conn);
				print(mysql_error());
				mysql_close($conn);

				return true;
			}
		}
	}
    return false;
}

function read_file($file) {
	return file_get_contents($file);
}

/*
define(SMTP_HOST, "61.19.246.144");
define(SMTP_PORT, 25);
define(SMTP_AUTH, true);
define(SMTP_USER, "webmaster@thaipetlover.com");
define(SMTP_PASSWORD, "lovewannee");
define(SMTP_SECURE, "");
*/

define(SMTP_HOST, "smtp.gmail.com");
define(SMTP_PORT, 465);
define(SMTP_AUTH, true);
define(SMTP_USER, "thaipetlover@gmail.com");
define(SMTP_PASSWORD, "lovewannee");
define(SMTP_SECURE, "tls");

require($_SERVER["DOCUMENT_ROOT"]."/php/lib/phpmailer/class.phpmailer.php");

function get_mailer() {
	$mail = new PHPMailer();
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host = SMTP_HOST; // SMTP server
	$mail->Port = SMTP_PORT;
	$mail->SMTPAuth = SMTP_AUTH;
	$mail->Username = SMTP_USER;
	$mail->Password = SMTP_PASSWORD;
	$mail->SMTPSecure = SMTP_SECURE;

	return $mail;
}

function send_mail($from, $to, $cc, $bcc, $subject, $message) {

	$mail = get_mailer();
	$mail->CharSet = "TIS620";

	$mail->From = $from;
	$mail->FromName = $from;

	$mail->AddAddress($to);

	if (isset($bcc)) {
		if (is_array($bcc)) {
			foreach ($bcc as $addr) {
				$mail->AddBCC($addr);
			}
		}
		else {
			$mail->AddBCC($bcc);
		}
	}

	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->IsHTML(false); 

	if(!$mail->Send()) {
	   echo 'Message was not sent.';
	   echo 'Mailer error: ' . $mail->ErrorInfo;
	   return false;
	}

	return true;
}

?>