<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

$author = new Author();
$author->name = 'Leila S. Chudori';
$author->description = 'penulis novel';
echo "{$author->name} merupakan seorang {$author->description} asal Indonesia.\nBerikut merupakan detail dari salah satu bukunya.\n";

$book = new Book();
$book->ISBN = 9786024246945;
$book->title = 'Laut Bercerita';
$book->description = 'Novel';
$book->category = 'Perjuangan sekelompok orang yang terdiri atas mahasiswa dan masyarakat sipil yang memperjuangkan keadilan';
$book->language = 'Indonesia';
$book->numberOfPage = 379;
$book->author = 'Leila S. Chudori';
$book->publisher = 'Gramedia';

print_r($book->showAll());