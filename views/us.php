<?php
$title = 'U.S.';
$posts = [
    [
        'title' => 'Same U.S title 1',
        'date' => 'January 1, 2021',
        'author' => 'Pets',
        'content' => 'Same U.S content 1',
    ],
    
        [
        'title' => 'Same U.S title 1',
        'date' => 'January 1, 2021',
        'author' => 'Lusss',
        'content' => 'Same U.S content 1',
    ],
      [
        'title' => 'Same U.S title 1',
        'date' => 'January 1, 2021',
        'author' => 'Alex',
        'content' => 'Same U.S   content 1',
    ],
      [
        'title' => 'Same U.S title 1',
        'date' => 'January 1, 2021',
        'author' => 'Manivald',
        'content' => 'Same U.S content 1',
    ],
];
    ?>


<?php include __DIR__ . '/partials/header.php'; ?>
   
   
    <main class="container">
      <div class="row g-5">
        <div class="col-md-8">
          <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
  <?php include __DIR__ . '/partials/footer.php'; ?>  
 