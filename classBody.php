<!-- File:  classBody.php -->

<?php

class classBody {
	public function menu($page) {
		
		echo '
		<tr>
			<td>
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">             
			<tr>
				<td class="bg3">
                		<table width="760" border="0" align="center" cellpadding="0" cellspacing="0" class="container" id="menu" style="border-radius:10px;">
                   		<tr align="center">';
                                        if ($page=="plsql") {
                                          echo'
					  <td><span title="Home"><a href=home.php?page=plsql><img height="35" width="35" alt="Home" src="http://www.gurpreetkaur.org/wp-content/themes/smallbiz/images/mobile/home-f.png" style="border:0px;"></a></span></td>';
                                        } else {
                                          echo '<td><a href="home.php" target="_">
<button class="site_buttons">Home</button></a></td>';
                                         
                                        }
                                  	
                             		/*
                                        echo'
                          		<td><a href="Gurpreet_Kaur_Resume.doc" title="Resume"><button class="site_buttons">Resume</button></a></td>'; */
					echo '
					<td><a href="http://www.gurpreetkaur.org/html5/resume.php" title="Resume"><button class="site_buttons">Resume</button></a></td>
					';
					echo'
                        		<td>
					<a href="http://www.gurpreetkaur.org/contemporary/cover_letter.php" onclick="return popitup(this.href, "_blank", "height=1000,width=1200,menubar=yes,toolbar=yes")">
<button class="site_buttons">Cover Letter</button></a></td>';
                          			                        		
					echo'
					<td align="center"><a href="http://www.gurpreetkaur.org/contemporary/object-oriented-php/jquery.php"><font color="#FFFFFF">
<button class="site_buttons">JQUERY</button></a></td>';
					
					echo '
					<td><a href="http://www.gurpreetkaur.org/contemporary/object-oriented-php/myproject/jqgrid_demo40/editData.html" onclick="return popitup(this.href, "_blank", "height=1000,width=1200,menubar=yes,toolbar=yes")">
<button class="site_buttons">JQGrid</button></a></td>';
					echo '
					<div id="floatbar">';
                                        echo '<td><a href="http://www.gurpreetkaur.org/contemporary/object-oriented-php/projects.php" onclick="return popitup("http://www.gurpreetkaur.org/contemporary/object-oriented-php/projects.php","height=800,width=750,menubar=yes,toolbar=yes>
<button class="site_buttons">Projects</button></a></td>';

					echo '</div>
                        			<td align="center"><a href="http://www.gurpreetkaur.org/contemporary/object-oriented-php/sitesearch.php">
<button class="site_buttons">Site Search</button></a></td>
					
                    		</tr>    
                		</table>
                		</td>
			</tr>
			
           		</table>
           		</td>
	         </tr>';
	
	return $this;
	}
	
	
	public function mainContent() {
		$page = $_GET['page'];
	
		echo '
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="container2" style="border-radius:20px;">
	         <tr>
		    <td align="center">
                    <h2><br><font color="FFFFFF" size="3">WELCOME</font></h2>
                    <div class="slider-wrap">
                      <div id="slider1" class="csw"  style="background-color:#003366;"> 
		        <div class="panelContainer">                  
			  <div class="panel">';
/*
				if($page=="login") {
					echo '<div style="float:left;width:200px;">test</div><div id="login"><table><tr><td>&nbsp;&nbsp;</td><td><br><br><font size="3" color="#FFFFFF">test2</td></tr></table></div><div float:right;width:200px;>test3</div><br>';
				} else {
*/
					if ($page == 'plsql') {
echo '<div style="float:left;width:200px;">&nbsp;</div><div style="float:left;height:450px;background-color:#335e8c;overflow:hidden;width:550px;text-align:left;font-size:20px;-moz-box-shadow: 0 0 10px 5px black, 40px -30px lime, 40px 30px 50px lightblue, -40px 30px yellow, -40px -30px 50px blue;-webkit-box-shadow: 0 0 10px 5px black, 40px -30px lime, 40px 30px 50px lightblue, -40px 30px yellow, -40px -30px 50px blue;box-shadow: 0 0 10px 5px black, 40px -30px green, 40px 30px 50px lightblue, -40px 30px green, -40px -30px 50px lightblue;"><table><tr><td>&nbsp;&nbsp;</td><td><br><br><font size="3" color="#FFFFFF">Hello Everyone,<br><br>Welcome to my site. I\'m a Web Developer with 8+ years of professional experience. I\'m a US Citizen. My last job was in 2007. What have I been doing since then? - Learning new technologies. I have designed and developed this web site.<br><br>Happy Browsing ...<br><br>Thank you,<br>Gurpreet Kaur</font></td></tr></table></div><div float:right;width:200px;>&nbsp;</div><br>';
					
					} else {
echo '
<script type="text/javascript">
function changeText(cont1,cont2,speed){
    var Otext=cont1.text();
    var Ocontent=Otext.split("");
    var i=0;
    function show(){
        if(i<Ocontent.length)
        {       
            cont2.append(Ocontent[i]);
            i=i+1;
        };
    };
        var Otimer=setInterval(show,speed); 
};
$(document).ready(function(){
    changeText($(".animateText"),$(".animateText2"),78); //  150 = the Delay time in milliseconds between strokes.
    clearInterval(Otimer);
});
</script>';
                            		echo '<div style="float:left;width:200px;">&nbsp;</div><div style="float:left;height:450px;background-color:#335e8c;overflow:hidden;width:550px;text-align:left;font-size:20px;-moz-box-shadow: 0 0 10px 5px black, 40px -30px lime, 40px 30px 50px lightblue, -40px 30px yellow, -40px -30px 50px blue;-webkit-box-shadow: 0 0 10px 5px black, 40px -30px lime, 40px 30px 50px lightblue, -40px 30px yellow, -40px -30px 50px blue;box-shadow: 0 0 10px 5px black, 40px -30px green, 40px 30px 50px lightblue, -40px 30px green, -40px -30px 50px lightblue;"><table><tr><td>&nbsp;&nbsp;</td><td><br><br><font size="3" color="#FFFFFF">Hello Everyone,<br><br>Welcome to my site. I\'m a Web Developer with 8+ years of professional experience. I have designed and developed this web site. Currently, I\'m looking for a position as PHP/ Oracle PLSQL Web Developer. I\'m a US Citizen. My last job was in 2007. What have I been doing since then? - Learning new technologies. Please contact me, if you have any concern\'s related to my off time from work- I volunteer to do a small project for you. <br><br>Happy Browsing.. <br><br>Thank you,<br>Gurpreet Kaur</font></td></tr></table></div><div float:right;width:200px;>&nbsp;</div><br>'; 


   }                         		
                            /*	}	*/		
			echo '	
                        </div>    
		       </div><!-- .panelContainer -->
	              </div><!-- #slider1 -->
                    </div><!-- .slider-wrap -->
                   <button style="background-color:lightblue;width:200px;border-radius:20px;">&nbsp;&nbsp;&nbsp;&nbsp;<b>CONTACT</b>&nbsp;&nbsp;&nbsp;&nbsp;<br></button>
                     <p id="cross-links">
	             <b><a href="#" class="flip" style="color:#FFFFFF;">Email: gkaur.tech@gmail.com/ g1kaur@yahoo.com |</a>&nbsp;<a href="#" class="flip1" style="color:#FFFFFF;">Phone: (978) 701-2875 |</a>&nbsp;</b>
</p>
                      </td>
	         </tr>
           </table>
          </table>';
	
	return $this;
	}
	
	public function footer() {
		echo '<footer style="color:#FFFFFF;height:20px;background:#335e8c;position:fixed;width:100%;bottom:0px;">Copyright &copy; 2012<footer>';
	}
	
	function replaceSymbol($content) {
  		$content = str_replace( '<', '&#060', $content );
		$content = str_replace( '>', '&#062', $content );
		echo nl2br($content); 
	}
}
?>	