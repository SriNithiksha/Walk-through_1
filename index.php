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
  return $book['author'] === 'Andy Weir';
});

require "index.view.php";
?>

