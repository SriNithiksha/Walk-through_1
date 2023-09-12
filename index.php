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
      'releaseyear' => 1968,
      'purchaseUrl' => 'http: //example.com'
    ],
    [
      'name' => 'Project hail mary',
      'author' => 'Andy Weir',
      'releaseyear' => 2021,
      'purchaseUrl' => 'http: //example.com'
    ],
    [
      'name' => 'The Martian',
      'author' => 'Andy Weir',
      'releaseyear' => 2011,
      'purchaseUrl' => 'http: //example.com'
    ],
  ];

  function filterByAuthor($books)
  {
    $filteredBooks = [];

    foreach ($books as $book) {
      if ($book['author'] === 'Andy Weir') {
        $filteredBooks[] = $book;
      }
    }

    return $filteredBooks;
  }
  ?>
  <ul>
    <?php foreach (filterByAuthor($books, 'Philip K. Dick') as $book): ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
          <?= $book['name']; ?> (<?= $book['releaseyear'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>

    <?php endforeach; ?>
  </ul>

</body>

</html>