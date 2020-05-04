<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

   for ($i=0; $i <= 400; $i=$i+20) { 
       echo '<div style="display: block; width: $i; height: 20px; background-color: #454d59;"> </div>';
   }

   ?>

</body>
</html>