<?php


class Book
{
    public $id;
    public $name;
    public $author;
    public $category;
    public $image;

    public function __construct($name, $author, $category, $image)
    {
        $this->name = $name;
        $this->author = $author;
        $this->category = $category;
        $this->image = $image;
    }
}