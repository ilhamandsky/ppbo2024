<?php

class Author {
    public $name;
    public $description;
}

class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function showAll()
    {
        return [
            'ISBN' => $this->ISBN,
            'Title' => $this->title,
            'Description' => $this->description,
            'Category' => $this->category,
            'Language' => $this->language,
            'Number of Page' => $this->numberOfPage,
            'Author' => $this->author,
            'Publisher' => $this->publisher,
        ];
    }

    public function detail($ISBN)
    {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        }
        return null;
    }
}

class Publisher {
    public $name;
    public $address;
    public $phone;

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }
}

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