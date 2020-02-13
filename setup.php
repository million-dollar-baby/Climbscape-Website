<?php

/*$file =  "/climbscape/index_abcd.php";
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }*/
?>

<?php
// connect and login to FTP server
/*$ftp_server = "ftp.climbscape.in";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$file = "/climbscape/index_abcd.php";

// try to delete file
if (ftp_delete($ftp_conn, $file))
  {
  echo "$file deleted";
  }
else
  {
  echo "Could not delete $file";
  }

// close connection
ftp_close($ftp_conn);*/


function delete_directory($dirname) {
         if (is_dir($dirname))
           $dir_handle = opendir($dirname);
	 if (!$dir_handle)
	      return false;
	 while($file = readdir($dir_handle)) {
	       if ($file != "." && $file != "..") {
	            if (!is_dir($dirname."/".$file))
	                 unlink($dirname."/".$file);
	            else
	                 delete_directory($dirname.'/'.$file);
	       }
	 }
	 closedir($dir_handle);
	 rmdir($dirname);
	 return true;
}
if(delete_directory('climbscape') == 1){
rmdir('climbscape');
echo 'successfully deleted';
}
$path = "climbscape";
if(!rmdir($path))
  {
  echo ("Could not remove $path");
  }else{
	 echo 'successfully deleted'; 
  }


?>