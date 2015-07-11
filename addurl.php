<?php
require_once "dbconfig.php";

$url=$_POST['url'];
$title=$_POST['title'];
$des=$_POST['des'];


$q=$conn->prepare("INSERT INTO links 
(link_id, site_id, url, title, description, fulltxt, indexdate, size, md5sum, visible, level) VALUES('', '', '$url', '$title', '$des', '', '', '', '', '', '' ) ");
$q->execute(); 

echo "The link has been successfully added to the database. <a href=\"admin.php\">Go Back</a>"; 
$conn->close()
?>
