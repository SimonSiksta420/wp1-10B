<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

   for ($i=20; $i > 0; $i--) { 
       echo '<div style="display: block; width:(20*$i)px; height: 20px; background-color: #454d59;">' '</div>';
   }

   ?>
</body>
</html>