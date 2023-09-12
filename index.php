<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>

</head>

<body>
  <h1>Recommended Books</h1>

  <?php

   $books = [
   "Do androids dream of electric sheep",
   "The Langoliers",
   "Hail Mary",
   ]

  ?>
  <ul>
    <?php foreach ($books as $book) : ?> 
    <li><?= $book ?></li>
    <?php endforeach; ?>
    
  
  </ul>
</body>

</html>