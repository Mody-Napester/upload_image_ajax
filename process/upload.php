<?php 

// echo "<pre>";
// print_r($_FILES);

$tname = $_FILES['image']['tmp_name'];
$nname = rand() . $_FILES['image']['name'];
$dest = 'images/' . $nname;

move_uploaded_file($tname, '../' . $dest);

$output = [$nname,$dest];

sleep(2);
//print_r($output);

echo $dest;