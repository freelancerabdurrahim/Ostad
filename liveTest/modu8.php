<!DOCTYPE html>
<html>
<head>
	<title>Table with Form</title>
</head>
<body>
	<h1>Table with Form</h1>
	<table>
		<tr>
			<th>Name</th>
			<th>Age</th>
		</tr>
		<tr>
			<td>John</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Sarah</td>
			<td>30</td>
		</tr>
		<tr>
			<td>Mike</td>
			<td>28</td>
		</tr>
	</table>
	<br>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="age">Age:</label>
		<input type="number" id="age" name="age"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if(isset($_POST['submit'])) {
			$name = $_POST['name'];
			$age = $_POST['age'];
			
			echo "<tr>";
			echo "<td>" . htmlspecialchars($name) . "</td>";
			echo "<td>" . htmlspecialchars($age) . "</td>";
			echo "</tr>";
		}
	?>
</body>
</html>
