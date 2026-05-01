<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>All Users - Hotel Telly</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="users.css" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet"/>
</head>
<body>

  <h2>Registered Users</h2>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $result = $conn->query("SELECT id, name, email, contact FROM users");
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>
              <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['contact']}</td>
            </tr>";
          }
        } else {
          echo "Empty";
        }
      ?>
    </tbody>
  </table>

  <a href="register.html" class="back-link">← Back to Register</a>

</body>
</html>