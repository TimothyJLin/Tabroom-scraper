<?php
header('Content-Type: application/json');

 $item1=$_GET['test'];
echo json_encode($item1.toString());
/*
//echo post
$name=$_GET['name'];
$URL=$_GET['url'];
$debaterInformation = array(
    'name' => 'John',
    'school' => 30,
    'url' => 'New York'
  );

echo $debaterInformation;
//json_encode($debaterInformation);
//echo "<script>console.log('This will be logged to the console');</script>";


