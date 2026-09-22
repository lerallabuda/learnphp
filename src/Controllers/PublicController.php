<?php
namespace App\Controllers;
use App\DB;

class PublicController
{
    public function index()
    {
        $db = new DB();
        $articles = $db->all();
        dump($articles);
        // $title = 'World';
        // view('index', compact('title', 'posts'));
    }

public function us()
    {
        $title = 'U.S';
        $posts = [
            [
                'title' => 'Some U.S title 1',
                'content' => 'Some U.S content 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
            ],
            [
                'title' => 'Some U.S title 2',
                'content' => 'Some U.S content 2',
                'date' => 'January 2, 2021',
                'author' => 'Juss',
            ],
            [
                'title' => 'Some U.S title 3',
                'content' => 'Some U.S content 3',
                'date' => 'January 3, 2021',
                'author' => 'Alex',
            ],
            [
                'title' => 'Some U.S title 4',
                'content' => 'Some U.S content 4',
                'date' => 'January 4, 2021',
                'author' => 'Manivald',
            ],
        ];
        view('us', compact('title', 'posts'));
    }

    public function tech()
    {
        $title = 'Technology';
        $posts = [
            [
                'title' => 'Some Technology title 1',
                'content' => 'Some Technology content 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
            ],
            [
                'title' => 'Some Technology title 2',
                'content' => 'Some Technology content 2',
                'date' => 'January 2, 2021',
                'author' => 'Juss',
            ],
            [
                'title' => 'Some Technology title 3',
                'content' => 'Some Technology content 3',
                'date' => 'January 3, 2021',
                'author' => 'Alex',
            ],
            [
                'title' => 'Some Technology title 4',
                'content' => 'Some Technology content 4',
                'date' => 'January 4, 2021',
                'author' => 'Manivald',
            ],
        ];
        view('tech', compact('title', 'posts'));
    }

public function forms()
    {
        view('forms');
    }

        public function answer() 
        {
        dump($_GET);
        dump($_POST);
    }
}