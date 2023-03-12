<!DOCTYPE html>
<html>
  <head>
    <title>User Registration Form</title>
  </head>
  <body>
    <h1>User Registration Form</h1>
    <form method="post" action="process_form.php" enctype="multipart/form-data">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>

      <label for="profile_picture">Profile Picture:</label>
      <input type="file" id="profile_picture" name="profile_picture" required><br>

      <input type="submit" value="Submit">
    </form>
  </body>
</html>






<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$profile_picture = $_FILES['profile_picture'];

if (empty($name) || empty($email) || empty($password) || empty($profile_picture)) {
  die("All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  die("Invalid email format.");
}

$uploads_dir = 'uploads/';
$filename = uniqid() . '_' . $profile_picture['name'];
move_uploaded_file($profile_picture['tmp_name'], $uploads_dir . $filename);

$csv_file = fopen('users.csv', 'a');
fputcsv($csv_file, [$name, $email, $filename]);
fclose($csv_file);

session_start();
$_SESSION['name'] = $name;
setcookie('name', $name, time() + (86400 * 30), '/'); 

header('Location: success.php');
exit();
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Registered Users</title>
  </head>
  <body>
    <h1>Registered Users</h1>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Profile Picture</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $csv_file = fopen('users.csv', 'r');
        while (($row = fgetcsv($csv_file)) !== false) {
          echo "<tr>";
          echo "<td>{$row[0]}</td>";
          echo "<td>{$row[1]}</td>";
          echo "<td><img src=\"uploads/{$row[2]}\" width=\"100\"></td>";
          echo "</tr>";
        }
        fclose($csv_file);
        ?>
      </tbody>
    </table>
  </body>
</html>

