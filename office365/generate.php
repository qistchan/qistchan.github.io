<?php
$id=$_GET['id'];
for ($i=1; $i < 10; $i++) { 
	$doid="2015".$id."0".$i;
	$text_valid=md5(md5($doid));
	$doid=substr($doid, 4);
	echo "https://qistchan.com/office365/?id=".$doid."&valid=office365".$text_valid;
	echo "<br/>";
	$doid="";
	$text_valid="";
}
for ($i=10; $i < 50; $i++) { 
	$doid="2015".$id.$i;
	$text_valid=md5(md5($doid));
	$doid=substr($doid, 4);
	echo "https://qistchan.com/office365/?id=".$doid."&valid=office365".$text_valid;
	echo "<br/>";
	$doid="";
	$text_valid="";
}

?>