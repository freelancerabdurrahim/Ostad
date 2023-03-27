<!DOCTYPE html>
<html>

<head>
	<title>Registration Form</title>
</head>

<body>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];

			// Validate form fields
			if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
				echo "<p>All fields are required and must not be empty.</p>";
			} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<p>Invalid email address format.</p>";
			} elseif ($password != $confirm_password) {
				echo "<p>Password and Confirm Password fields must match.</p>";
			} else {
				echo "<p>Registration successful! Welcome, $first_name!</p>";
			}
		}
	?>

	<h2>Registration Form</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label>First Name:</label>
		<input type="text" name="first_name" required><br><br>
		<label>Last Name:</label>
		<input type="text" name="last_name" required><br><br>
		<label>Email Address:</label>
		<input type="email" name="email" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		<label>Confirm Password:</label>
		<input type="password" name="confirm_password" required><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

</body>

</html>