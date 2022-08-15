<head>
    <title>Index</title>
    <link rel="stylesheet" href="../assets/src/css/global.css">
    <link rel="stylesheet" href="../assets/src/css/partials.css">
    <link rel="stylesheet" href="../assets/src/css/table.css">
</head>

<?php include('../assets/src/partials/header.user.html'); ?>

<div>
    <ul class="sidebar">
        <li>
            <a class="link" href="editprofile.php">Edit Profile</a>
        </li><br>
        <li>
            <a class="link" href="changepassword.php">Change Password</a>
        </li>

        <br><br>
        <div>
      <a class="link" href="../login.php">Logout</a>
    </div>

    </ul>
</div>

<div class="box">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <form method="post">
        <table>
            <tr>
                <th>Password</th>
                <td>
                    <input type="text" name="password" value="<?php echo $password; ?>">
                </td>
            </tr>
            <tr>
                <th>New Password</th>
                <td>
                    <input type="text" name="password" value="<?php echo $password; ?>">
                </td>
            </tr>
        </table>
        <br>
        <p align="center"><input type="submit" value="Update" name="update"></p>
    </form>
</div>

<?php include('../assets/src/partials/footer.html'); ?>