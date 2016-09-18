<!-- classHead.php -->

<?php

class classHead
{
	public function headSection() {
		
		echo '<link href="CSS/default.css" rel="stylesheet" type="text/css">
		<link href="CSS/page-specific.css" rel="stylesheet" type="text/css"/>
		<link href="CSS/coda-slider.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="http://www.gurpreetkaur.org/html5/styles.css"/>
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

		<script src="http://www.gurpreetkaur.org/slider/coda-slider/jquery-1.2.1.pack.js" type="text/javascript"></script>
		<script src="http://www.gurpreetkaur.org/slider/coda-slider/jquery-easing.1.2.pack.js" type="text/javascript"></script>
		<script src="http://www.gurpreetkaur.org/slider/coda-slider/jquery-easing-compatibility.1.2.pack.js" type="text/javascript">
		<script src="http://www.gurpreetkaur.org/slider/coda-slider/coda-slider.1.1.1.pack.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script src="https://github.com/mkdynamic/jquery-popupwindow/raw/master/jquery.popupwindow.js"></script>
		<script src="http://ui.jquery.com/latest/ui/effects.core.js"></script>
		<script type="text/javascript" src="JQUERY/jquery-func.js"></script>';
		return $this;
}


	public function banner() {
	
		echo '
		<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#003366"><tr><td><td></tr></table>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#003366"><tr><td><td></tr></table>
		<table width="100%" height="50px;" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td bgcolor="#335e8c" align="left" height="50px;"><font color="#FFFFFF"><b>GURPREET TECHNOLOGIES</b></font></td>
                </tr><tr><td><br><br><br><br></td></tr>

		</table>
                ';
		
		return $this;
	}
	
	public function menu() {
		echo '
		<table>
		<tr>
			<td>
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">             
			<tr>
				<td class="bg3">
                		<table width="760" border="0" align="center" cellpadding="0" cellspacing="0" class="container" id="menu">
                   		<tr align="center">      
					<td><span title="Home"><a href="home.php"><img height="35" width="35" alt="Home" src="http://www.gurpreetkaur.org/wp-content/themes/smallbiz/images/mobile/home-f.png" style="border:0px;"></a></span></td>
                        <td>
                          		<a href="http://www.gurpreetkaur.org/contemporary/Resume.php" onclick="return popitup(this.href, "_blank", "height=1000,width=1200,menubar=yes,toolbar=yes")">RESUMEEE</a></td>
                        		<td>
                          		<a href="http://www.gurpreetkaur.org/contemporary/cover_letter.php" onclick="return popitup(this.href, "_blank", "height=1000,width=1200,menubar=yes,toolbar=yes")">PROFILE</a></td>
					<td align="center"><a href="http://www.gurpreetkaur.org/contemporary/jquery.php">JQUERY</a></td>
                        		<td><a href="http://www.gurpreetkaur.org/contemporary/html5.php">HTML5</a></td>
					<div id="floatbar">
                                        <td><a href="http://www.gurpreetkaur.org/contemporary/object-oriented-php/projects.php" onclick="return popitup("http://www.gurpreetkaur.org/contemporary/object-oriented-php/projects.php","height=800,width=750,menubar=yes,toolbar=yes")" id="a1">MY PROJECTS</a></td>';
/*
						<td><a href="http://www.gurpreetkaur.org/Projects/Login/index.php" onclick="return popitup("http://www.gurpreetkaur.org/Projects/Login/index.php","height=800,width=750,menubar=yes,toolbar=yes")" id="a1">MY PROJECTS</a></td>
*/
                                        echo '</div>
                        			<td align="center"><a href="http://www.gurpreetkaur.org/contemporary/sitesearch.php">SITE SEARCH</a></td>
					
                    		</tr>    
                		</table>
                		</td>
			</tr>
			<tr>
				<td>
                		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="container" id="page" style="border-top-left-radius:20px;background-color:#fefefe;">
				<tr>
                   			<td>
                   			<table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color:#fefefe;">
					<tr>
						<td>
                           			<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-top-left-radius:20px;background-color:#fefefe;">
			   			<tr>
			     				<td>
                               				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="bgtop" style="border-top-left-radius:20px;background-color:#fefefe;"">
			        				<tr valign="top">
                                				</tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;<br></td></tr>
                               				</table>
                              				</td>
			   			</tr>
			   			</table>
                         			</td>
					</tr>
		   			</table>
                   			</td>
		  		</tr>
		  		</table>
                  		</td>
	   		</tr>
           		</table>
           		</td>
	         </tr>';
	
	return $this;
	}

}

?>