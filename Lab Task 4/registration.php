<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <span>
            <h1>XCompany</h1>
            <span><a href="">Home</a></span>
            <span><a href="">Login</a></span>
            <span><a href="">Registration</a></span>
        </span>
    </div>
    <div>
        <h3>REGISTRATION</h3>
        <form method="POST">
            <div class="regPage">
                <span>Name</span>
                <input type="text" name="name" class="alpha">
            </div>
            <div class="regPage">
                <span>Email</span>
                <input type="text" name="email" class="alpha">
            </div>
            <div class="regPage">
                <span>User Name</span>
                <input type="text" name="username" class="alpha">
            </div>
            <div class="regPage">
                <span>Password</span>
                <input type="text" name="password" class="alpha">
            </div>
            <div class="regPage">
                <span>Confirm Password</span>
                <input type="text" name="rePassword" class="alpha">
            </div>
            <div class="regPage">
                <Span>Gender</Span><br><br>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="other">Other
            </div>
            <div class="regPage">
                <span>Date of Birth</span><br><br>
                <input type="date" name="dob">
            </div>
            <div class="regPage">
                <input type="submit" name="submit"> <input type="reset" name="reset">
            </div>
        </form>
    </div>
    <div style="text-align: center;">
        <p>Copyright &copy; 2017</p>
    </div>
</body>

</html>