<?php
//echo post
$name=$_POST['name'];
$URL=$_POST('url');
$debaterInformation = array(
    'name' => 'John',
    'school' => 30,
    'url' => 'New York'
  );

echo json_encode($debaterInformation);
echo "<script>console.log('This will be logged to the console');</script>";


