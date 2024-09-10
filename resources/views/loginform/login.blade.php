<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="loginform/login.css">
    <title>Log In</title>
</head>
<body>
 <div class="container">
    <img src="{{ URL('loginform/login-logo.png') }}">
    <h1>Log In</h1>
        <div class="input-container">
            <form action="/home" method="">
                @csrf
        
                <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" autocomplete="email"><br><br>
                <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="current-password"><br><br>
                <button type="submit" class="submit">Sign In</button><br><br>
                <a href="/register">Not registered? Sign Up here!</a>
    </div>
    </form>
</div>
</body>
</html>