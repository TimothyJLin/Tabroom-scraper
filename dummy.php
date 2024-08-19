<?php
//echo post
#$name=$_GET['name'];
#$URL=$_GET('url');
$debaterInformation = array(
    'name' => 'John',
    'school' => 30,
    'url' => 'New York'
  );

echo "<script>console.log('This will be logged to the console');</script>";

echo json_encode($debaterInformation);

