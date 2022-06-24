<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
                        <a href="">Edit Profile</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/changeProfilePicture.php">Change Profile Picture</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/Dashboard/changePassword.php">Change Password</a>
                    </li><br>
                    <li>
                        <a href="http://localhost/LabTask/Lab%20Task%204/homepage.html">Logout</a>
                    </li>
                </ul>
            </div>
        </form>
        <div class="accView">
        <h3>EDIT PROFILE</h3>
            <form action="">
                <div class="editProfileView">
                    <span>Name</span>
                    <input type="text" class="alpha">
                </div>
                <div class="editProfileView">
                    <span>Email</span>
                    <input type="text" class="alpha">
                </div>
                <div class="editProfileView">
                    <span>Gender</span><br><br>
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                    <input type="radio" name="gender">Other
                </div>
                <div class="editProfileView">
                    <span>Date of Birth</span>
                    <input type="date" class="alpha">
                </div><br><br>
                <div class="editProfileView">
                    <input type="submit" name="submit">
                    <input type="reset" name="reset">
                </div>
            </form>
        </div>
    </div>
    <div style="text-align: center;">
        <p>Copyright &copy; 2017</p>
    </div>
</body>
</html>