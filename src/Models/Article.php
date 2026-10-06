<?php

namespace App\Models;

class Article extends Model {
    protected static string $table = 'articles';
    
    public $id;
    public $title;
    public $body;
    public $author;
    public $date;
  
}