<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <style>
   body {
      display: grid;
      place-items: center;
      height: 100%;
      margin: 0;
      font-family: sans-serif;
    }
    
  </style>
</head>

<body>
<?php
    $name = "PHP & MYSQL";
    $read = false;

    if($read){
      $message = "You have read $name";
    }
    else{
      $message = "You have not read $name";
    }
  ?>
  <h1>
    <?php echo $message; ?>"
  </h1>
</body>

</html>