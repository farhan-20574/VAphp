<?php include 'db.php'; ?>
<a href="create.php">Add New Student</a>
<table border="1">
  <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
  <?php
  $result = mysqli_query($conn, "SELECT * FROM students");
  while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>
          <a href='edit.php?id={$row['id']}'>Edit</a> |
          <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
      </tr>";
  }
  ?>
</table>