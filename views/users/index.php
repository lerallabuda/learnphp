<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <h1 class="mb-4">Users</h1>

  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach (($users ?? []) as $user): ?>
        <tr>
          <td><?= htmlspecialchars((string) $user->id) ?></td>
          <td><?= htmlspecialchars($user->name) ?></td>
          <td><?= htmlspecialchars($user->email) ?></td>
          <td>
            <div class="btn-group">
              <a href="/admin/users/view?id=<?= $user->id ?>" class="btn btn-info">View</a>
              <a href="/admin/users/edit?id=<?= $user->id ?>" class="btn btn-warning">Edit</a>
              <a href="/admin/users/delete?id=<?= $user->id ?>" class="btn btn-danger">Delete</a>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
