<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}
function dump(...$vars)
{
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        $title = 'World';
        $posts = [
            [
                'title' => 'Same world title 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
                'content' => 'Same world content 1',
            ],

            [
                'title' => 'Same world title 1',
                'date' => 'January 1, 2021',
                'author' => 'Lusss',
                'content' => 'Same world content 1',
            ],
            [
                'title' => 'Same world title 1',
                'date' => 'January 1, 2021',
                'author' => 'Alex',
                'content' => 'Same world content 1',
            ],
            [
                'title' => 'Same world title 1',
                'date' => 'January 1, 2021',
                'author' => 'Manivald',
                'content' => 'Same world content 1',
            ],
        ];
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        include __DIR__ . '/../views/us.php';
        break;
    case '/tech':
        include __DIR__ . '/../views/tech.php';
        break;
    default:
        echo '404';
}
