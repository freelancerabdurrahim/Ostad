<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
</head>

<body>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validate form fields
            if (empty($email) || empty($password)) {
                echo "<p>Both Email Address and Password fields are required.</p>";
            } else {
                $first_name = "John"; 
                echo "<p>Login successful! Welcome, $first_name!</p>";
            }
        }
    ?>

    <h2>Login Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Email Address:</label>
        <input type="email" name="email" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>


</body>

</html>