<!DOCTYPE html>
<html>
<head>
    <title>Account Creation</title>
</head>
<body>
    <h1>Create an Account</h1>
    <form name="from" method="post" action="database.php">
        <label for="username">Username:</label>
        <input type="text" id="user" name="user" required><br><br>

        <label for="password">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="pass" name="pass" required><br><br>
        <input type="submit" id="btn" name="submit" value="Create Account">
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>
