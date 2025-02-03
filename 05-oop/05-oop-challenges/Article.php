<?php

class Article
{
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        $this->published = true;
    }

    public function isPublished()
    {
        return $this->published;
    }
}

$article1 = new Article("How to train your dragon", "This is a story about how to train your dragon");
$article2 = new Article("How to train your dragon", "This is a story about how to train your php developer");

$article1->publish();

echo var_dump($article1->isPublished());
echo var_dump($article2->isPublished());
