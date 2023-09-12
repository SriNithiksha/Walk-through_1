<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>

</head>

<body>
  <h1>Recommended Books</h1>

  <?php

   $books = [
    [
      'name' => 'Do androids dream of electric sheep',
      'author' => 'Philip K. Dick',
      'purchaseUrl' => 'http: //example.com'
    ],
    [
      'name' => 'Project hail mary',
      'author' => 'Andy Weir',
      'purchaseUrl' => 'http: //example.com'
    ],
   ];

  ?>
  <ul>
    <?php foreach ($books as $book) : ?>
      <li>
        <a href="<?= $book['purchaseUrl']?>">
        <?= $book['name']; ?></li>
      <?php endforeach; ?>
  </ul>
</body>

</html>