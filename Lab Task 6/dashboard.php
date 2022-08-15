<head>
    <title>Index</title>
    <link rel="stylesheet" href="assets/src/css/global.css">
    <link rel="stylesheet" href="assets/src/css/partials.css">
</head>

<?php include('assets/src/partials/header.user.html'); ?>

<div>
    <ul class="sidebar">
        <li>
            <a class="link" href="dashboardExtension/editprofile.php">Edit Profile</a>
        </li><br>
        <li>
            <a class="link" href="dashboardExtension/changepassword.php">Change Password</a>
        </li>

        <br><br>
        <div>
            <a class="link" href="login.php">Logout</a>
        </div>

    </ul>
</div>

<div class="box">
    <div align="center">
        <h1>This is <?php echo $username; ?> Page!</h1>
    </div>
</div>

<?php include('assets/src/partials/footer.html'); ?>