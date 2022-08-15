<?php

require_once 'database/connect.php';

if (isset($_POST['submit'])) {
  session_start();

  if ($_POST['username'] == '' || $_POST['password'] == '') {
    echo '<script>';
    echo 'alert("Fields Can not be Empty!");';
    echo '</script>';
  } else {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    header('Location: dashboard.php');
  }
}

?>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="assets/src/css/global.css">
  <link rel="stylesheet" href="assets/src/css/partials.css">
  <link rel="stylesheet" href="assets/src/css/table.css">
</head>

<body>
  <?php include('assets/src/partials/header.html'); ?>

  <h1>Login</h1>

  <form action="" method="post">
    <div class="container">
      <table>
        <tr>
          <th>Username</th>
          <td>
            <input type="text" name="username" />
          </td>
        </tr>
        <tr>
          <th>Password</th>
          <td>
            <input type="text" name="password" />
          </td>
        </tr>
      </table>
    </div>
    </div>
    <div class="container">
      <button>
        <input type="submit" name="submit" value="Login" />
      </button>
    </div>
    <div class="center">
      <p>
        Not Registered?
        <a class="link" href="signup.php">Sign up</a>
      </p>
    </div>
  </form>

  <?php include('assets/src/partials/footer.html'); ?>
</body>

</html>