<?php 
    ob_start();
	session_start();
	require_once('inc/connection_province.php');
	date_default_timezone_set('Asia/Colombo');

	function ftp_upload($file_name){

		$out = 0;

		$file = $file_name;
		$remote_file = 'public_html/unique/input/'.$file;

		$ftp_host = 'files.000webhost.com'; /* host */
		//$ftp_user_name = 'geethpriyanka1994'; /* username */
		$ftp_user_name = 'shehanshaman'; /* username */
		$ftp_user_pass = 'shanaka22'; /* password */

		// set up basic connection
		$conn_id = ftp_connect($ftp_host);

		// login with username and password
		$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass) or die("Cannot login");
		ftp_pasv($conn_id, true) or die("Cannot switch to passive mode");

		// upload a file
		if (ftp_put($conn_id, $remote_file, $file, FTP_ASCII)) {
	 		echo "successfully uploaded $file\n";
	 		$out = 1;
		} else {
	 		echo "There was a problem while uploading $file\n";
		}

		// close the connection
		ftp_close($conn_id);

		return $out;
	}

 ?>