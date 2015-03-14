<?php
/* Added by Paulos Yibelo for external protection for high levels */
error_reporting(false);
header("X-Frame-Options:deny");
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");

?>