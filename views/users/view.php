<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <h1 class="mb-4">User</h1>

  <table class="table table-hover table-striped">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?= htmlspecialchars((string) $user->id) ?></td>
      </tr>
      <tr>
        <th>Name</th>
        <td><?= htmlspecialchars($user->name) ?></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><?= htmlspecialchars($user->email) ?></td>
      </tr>
    </tbody>
  </table>

  <a href="/admin/users" class="btn btn-secondary">Back to users</a>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
