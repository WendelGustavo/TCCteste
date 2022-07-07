<?php
$funcmysli = new mysqli("localhost", "root","c108","teste");
$bancos=mysqli_query($funcmysli,"SELECT * FROM teste WHERE id>0 ORDER BY id DESC LIMIT 1");
if($bancos->num_rows>0){
    $esp=$bancos->fetch_array(MYSQLI_ASSOC);
    $API=["temp"=>"".$esp['estado']."","max"=>"".$esp['max']."", "min"=>"".$esp['min'].""];
    echo json_encode($API);
}