<?php 
	if(preg_match('/system|exec|passthru|[\"\']/', $_GET['code']))
   {		
		echo "Oops !!"; 
	      }
	   else {
		 	eval($_GET['code']);
	  }
?>
