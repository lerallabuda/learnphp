<?php
$title = 'Technology';
$posts = [
    [
        'title' => 'Same tech title 1',
        'date' => 'January 1, 2021',
        'author' => 'Pets',
        'content' => 'Same tech content 1',
    ],
    
        [
        'title' => 'Same tech title 1',
        'date' => 'January 1, 2021',
        'author' => 'Lusss',
        'content' => 'Same tech content 1',
    ],
      [
        'title' => 'Same tech title 1',
        'date' => 'January 1, 2021',
        'author' => 'Alex',
        'content' => 'Same tech   content 1',
    ],
      [
        'title' => 'Same tech title 1',
        'date' => 'January 1, 2021',
        'author' => 'Manivald',
        'content' => 'Same tech content 1',
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
 