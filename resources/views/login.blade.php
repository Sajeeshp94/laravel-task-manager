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
        <h2>Login</h2>
        <div id="loginError" style="color: red;"></div> <!-- Div to display login errors -->
        <form method="POST" acttion="" id="loginForm" onsubmit="loginUser(); return false;"> <!-- Login form -->
            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Username" required autofocus><br> <!-- Input for username -->
            <input type="password" name="password" id="password" placeholder="Password" required><br> <!-- Input for password -->
            <button type="submit">Login</button> <!-- Login button -->
        </form>
        <p>Don't have an account? <a href="/register">Register here</a></p> <!-- Link to registration page -->
    </div>
</body>
</html>