<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
-->
</style><title>PD3GH || Terschelling Online || Contact</title><center>
<body background="images/bodybg.png"><br />
<tr valign="top"><td align="right"><center><img src="/Pd3gh top banner.JPG" width="688" height="115"></center>
<script language="JavaScript">
<!--

//Disable right mouse click Script
//By Maximus (maximus@nsimail.com) w/ mods by DynamicDrive
//For full source code, visit http://www.dynamicdrive.com

var message="Eerst even vragen aan de webmaster!";

///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")

// --> 
</script>
<? 
// geef e-mail adres op van ontvanger 
$mail_ontv = "terschelling@pd3gh.nl";

// is niet 100% !!! 
function checkmail($mail) 
{ 
    $email_host = explode("@", $mail); 
    $email_host = $email_host['1']; 
    $email_resolved = gethostbyname($email_host); 

    if ($email_resolved != $email_host && eregi("^[0-9a-z]([-_.~]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,4}$",$mail)) 
        $valid = 1; 

    return $valid; 
} 

// als er niet op submit is gedrukt, of als er wel op is gedrukt maar niet alles ingevoerd is 
if (!$_POST['submit'] || $_POST['submit'] && (!$_POST['naam'] || !$_POST['mail'] || !checkmail($_POST['mail']) || !$_POST['msggs'] || !$_POST['onderwerp'])) 
{ 
    if ($_POST['submit'] && (!$_POST['naam'] || !$_POST['mail'] || !checkmail($_POST['mail']) || !$_POST['msggs'] || !$_POST['onderwerp']))   
    { 
        echo "Je bent je naam, e-mail adres, onderwerp of bericht vergeten in te vullen. Ook kan het zijn "; 
        echo "dat je een verkeerd e-mail adres hebt ingevuld.<p>"; 
    } 
      
    // form + tabel 
    echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">"; 
    echo "<form method=\"POST\" ACTION=\"" . $_SERVER['PHP_SELF'] . "\">"; 
      
    // naam 
    echo "<tr><td>Naam:</td></tr>"; 
    echo "<tr><td><input type=\"text\" name=\"naam\" value=\"" . $_POST['naam'] . "\"></td></tr>"; 
      
    // space 
    echo "<tr><td>&nbsp;</td></tr>"; 
      
    // mail 
    echo "<tr><td>E-mail adres:</td></tr>"; 
    echo "<tr><td><input type=\"text\" name=\"mail\" value=\"" . $_POST['mail'] . "\"></td></tr>"; 
      
    // space 
    echo "<tr><td>&nbsp;</td></tr>"; 
      
    // mail 
    echo "<tr><td>Onderwerp:</td></tr>"; 
    echo "<tr><td><input type=\"text\" name=\"onderwerp\" value=\"" . $_POST['onderwerp'] . "\"></td></tr>"; 
      
    // space 
    echo "<tr><td>&nbsp;</td></tr>"; 
      
    // mail 
    echo "<tr><td>Bericht:</td></tr>"; 
    echo "<tr><td><TEXTAREA name=\"msggs\" ROWS=\"6\" COLS=\"45\">" . htmlentities($_POST['msggs']) . "</TEXTAREA></td></tr>"; 
      
    // space 
    echo "<tr><td>&nbsp;</td></tr>"; 
      
    // button 
    echo "<tr><td>&nbsp;</td></tr>"; 
    echo "<tr><td><input type=\"submit\" name=\"submit\" value=\"Versturen\"></td></tr>"; 
      
    // sluit form + tabel 
    echo "</form>"; 
    echo "</table>"; 
} 
// versturen naar 
else 
{      
    // set datum 
    $datum = date("d.m.Y H:i"); 
      
    // set ip 
    $ip = $_SERVER['REMOTE_ADDR']; 
      
    $inhoud_mail = "===================================================\n"; 
    $inhoud_mail .= "Ingevulde contact formulier\n"; 
    $inhoud_mail .= "===================================================\n\n"; 
    
    $inhoud_mail .= $_SERVER['SCRIPT_URI'] . "\n\n";

    $inhoud_mail .= "Naam: " . $_POST['naam'] . "\n"; 
    $inhoud_mail .= "E-mail adres: " . $_POST['mail'] . "\n"; 
    $inhoud_mail .= "Bericht:\n"; 
    $inhoud_mail .= $_POST['msggs'] . "\n\n"; 
      
    $inhoud_mail .= "Verstuurd op " . $datum . " via het ip " . $ip . "\n\n"; 
      
    $inhoud_mail .= "===================================================\n\n"; 
    
    // -------------------- 
    // spambot protectie 
    // ------ 
    // van de tutorial: http://www.phphulp.nl/php/tutorials/10/340/ 
    // ------ 
    
    $headers = "From: " . $_POST['naam'] . " <" . $_POST['mail'] . ">";
    
    $headers = stripslashes($headers);
    $headers = str_replace("\n", "", $headers); // Verwijder \n 
    $headers = str_replace("\r", "", $headers); // Verwijder \r 
    $headers = str_replace("\"", "\\\"", str_replace("\\", "\\\\", $headers)); // Slashes van quotes 
    
    $_POST['onderwerp'] = str_replace("\n", "", $_POST['onderwerp']); // Verwijder \n 
    $_POST['onderwerp'] = str_replace("\r", "", $_POST['onderwerp']); // Verwijder \r 
    $_POST['onderwerp'] = str_replace("\"", "\\\"", str_replace("\\", "\\\\", $_POST['onderwerp'])); // Slashes van quotes 
     
    mail($mail_ontv, $_POST['onderwerp'], $inhoud_mail, $headers); 
     
    echo "<h1>Je e-mail is verstuurd</h1>";
    
    echo "<p>Bedankt voor het versturen van een e-mail. Je zult snel een antwoord "; 
    echo "krijgen indien dit nodig is.</p>"; 
     
    echo "<p>We nemen alles serieus en zullen vertrouwelijk omgaan met de informatie "; 
    echo "die we binnen krijgen. Je e-mail adres zal nooit aan derden worden verstrekt.</p>"; 
} 
?> </td></tr></body></center>