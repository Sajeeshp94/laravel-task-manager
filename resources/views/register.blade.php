<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/register.css')
</head>
<body>
<div class="container">
        <h2>Register</h2>
        <div id="registerError" style="color: red;"></div> <!-- Div to display registration errors -->
        <form action="" id="registerForm" onsubmit="registerUser(); return false;"> <!-- Registration form -->
            <input type="name" name="emanameil" id="name" placeholder="Name" required><br><br> <!-- Input for username -->
            <input type="email" name="email" id="email" placeholder="Email" required><br><br> <!-- Input for username -->
            <input type="password" name="password" id="password" placeholder="Password" required><br><br> <!-- Input for password -->
            <button type="submit">Register</button> <!-- Register button -->
        </form>
        <p>Already have an account? <a href="/login">Login here</a></p> <!-- Link to login page -->
    </div>

</body>
</html>