<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../Styles/style.css">
</head>

<body>
    <div>
        <span>
            <h1>XCompany</h1>
            <span>Logged in as</span> <span><a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/dashboard.php">User</a></span>
    </div>
    <div>
        <form method="POST">
            <div class="sidePanel">
                <ul>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/viewProfile.php">View Profile</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/editProfile.php">Edit Profile</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/changeProfilePicture.php">Change Profile Picture</a>
                    </li><br>
                    <li>
                        <a href="">Change Password</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/homepage.html">Logout</a>
                    </li>
                </ul>
            </div>
        </form>
        <div class="accView">
            <h3>CHANGE PASSWORD</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="changePasswordView">
                    <span>Current Password</span>
                    <input type="password" class="alpha" name="currentpassword">
                </div>
                <div class="changePasswordView" style="color: green">
                    <span>New Password</span>
                    <input type="password" class="alpha" name="newpassword" >
                </div>
                <div class="changePasswordView" style="color: green">
                    <span>Retype New Password</span> 
                    <input type="password" class="alpha" name="confirmpassword">
                </div><br><br>
                <div class="changePasswordView" style="text-align: left"> <input type="submit" name="submit" value="submit"></div>
            </form>
        </div>
    </div>
    <div style="text-align: center;">
        <p>Copyright &copy; 2017</p>
    </div>
</body>

</html>