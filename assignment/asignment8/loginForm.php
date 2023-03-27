<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <style>
		body{
			margin: 50px;
		}
		label{
			font-size: 18px;
			font-weight: 700;
			color: #000;
			display: block;
		}
		input{
			width: 50%;
			border-radius: 15px;
			padding: 15px 20px;
			margin-top: 5px;
			border: 1px solid green;
		}
		input[type="submit"]{
			background-color: green;
			font-size: 20px;
			text-transform: uppercase;
			font-weight: 500;
		}
        @media all and (max-width:767px){
			input{
				width: 100%;
			}

		}
	</style>
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