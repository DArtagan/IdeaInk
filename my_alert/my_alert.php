<?php
	 
	// Documentation is available at the bottom of this file
	// /////////////////////////////////////////////////////////
	// $js = location of the folder where my_alert.js is stored. 
	// $css = location of the folder where my_alert.css is stored.
	// //////////////////////////////////////////////////////////
	$script_loc = "http://worldwidewilly.net/projects/ideaink/my_alert";
	$js = $script_loc . "/ff.js";
	$css = $script_loc . "/ff.css";
					 
	// NO NEED TO CHANGE BELOW HERE!
	
	function my_alert_head()
	{
		global $js;
		global $css;
		$code = "<link rel=\"stylesheet\" type=\"text/css\" href=\"$css\" /> \n ";
		$code .= "<script type=\"text/javascript\" src=\"$js\"></script> \n";
		echo $code;
	}
	
	function my_alert_body()
	{
		global $script_loc;
		$code = "<div id = \"msgboxImg\" style = \"display:none;\">" . $script_loc . "</div> \n";
		$code .= "<div id = \"blankbg\"></div> \n";
		$code .= "<div id=\"mymsgbox\"> \n";
		$code .= "<div id=\"msgboxHead\"></div> <br /> \n ";
   		$code .= "<div id=\"msgboxBody\"></div> <br /><br /> \n";		
   		$code .= "<input type=\"button\" class=\"msgboxButton\" onClick=\"hidedivs();\" value=\"OK\" /> </div>\n";
    	echo $code;
	}
	function my_alert($title, $msg, $stat = 0, $goto = "nil")
	{
		// $goto <- Optional. If available, The page redirects to this URL after clicking the OK button of message box.
		echo "<script language = 'javascript'> my_alert('$title','$msg', '$stat', '$goto'); </script>";
	}
	function my_alert_die($title, $msg, $stat = 0, $goto = "nil", $complete = false)
	{
		// Special function when no html is written. The function creates a html body.
		// When complete == true, It completes the HTML body. Otherwise, it leaves it for the webmaster to complete.
		echo "<html><title>$title</title><head>\n";
		my_alert_head();
		echo "</head><body>";
		my_alert_body();
		my_alert($title,$msg,$stat,$goto);
		if(complete)
			die("</body></html>");
	}
	
	
	// MY ALERT : PHP-JavaScript Message Box Alert
	//	///////////////////////////////////////
	// © AUTHOR: SHAFIUL AZAM
	// ISHAFIUL AT GMAIL DOT COM
	// PROGMAATIC DEVELOPER NETWORK ::: www.progmaatic.com
	// ////////////////////////////////////////
	// THIS INFORMATION SHOULD BE KEPT INTACT FOR LEGAL USE!
	// ////////////////////////////////////////
?>


