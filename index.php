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
      'releaseYear' => 1968,
      'purchaseUrl' => 'http: //example.com'
    ],
    [
      'name' => 'Project hail mary',
      'author' => 'Andy Weir',
      'releaseYear' => 2021,
      'purchaseUrl' => 'http: //example.com'
    ],
    [
      'name' => 'The Martian',
      'author' => 'Andy Weir',
      'releaseYear' => 2011,
      'purchaseUrl' => 'http: //example.com'
    ],
  ];

  $filteredBooks = array_filter($books, function ($book) {
    return $book ['author'] === 'Andy Weir';
  });

  ?>
  <ul>
    <?php foreach ($filteredBooks as $book): ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
          <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>

    <?php endforeach; ?>
  </ul>

</body>

</html>