<?php 
$funcmysli = new mysqli("localhost", "root","c108","teste");
$bancos2=mysqli_query($funcmysli,"INSERT INTO teste (estado,min,max) VALUES (".$_GET['temp'].",".$_GET['min'].",".$_GET['max'].")");