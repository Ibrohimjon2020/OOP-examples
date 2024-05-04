<?php

 class Post
 {
    public $id;
    public $title;
    public $body;
    public $create_at;

    public function __construct($id, $title, $body, $create_at)
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->create_at = $create_at;
    }

 }
?>

