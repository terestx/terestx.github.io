<?php
$q = $_GET['q'];
$fh= file_get_contents("http://www.google.com/search?q=$q");
echo $fh;
?>
