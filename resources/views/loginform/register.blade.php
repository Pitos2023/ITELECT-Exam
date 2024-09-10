<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="loginform/register.css">
</head>
<body>
<div class="container">
    <div class="input-container">
        <form action="" method="">
            @csrf
                    <label for="name">UserName</label><br>
                    <input type="text" name="name" id="name" required placeholder="Enter your name"><br><br>

                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" required autocomplete="current-password" placeholder="Must contain at least 8 letters"> @error('password') <span class="text-danger" style="color:red;">{{ $message }}</span> @enderror<br><br>

                    <label for="password_confirmation">Confirm Password</label><br>
                    <input type="password" name="password_confirmation" id="password_confirmation" required placeholder="Must contain 8 letters" autocomplete="new-password"></br><br>

                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" required autocomplete="current-email" placeholder="Enter your email"><br><br>

                    <button type="submit" class="submit">Sign Up</button><br><br>

                    <a href="/login">Already Registered? Click to go back to log in!</a>
        </form>
    </div>
</div>
</body>
</html>