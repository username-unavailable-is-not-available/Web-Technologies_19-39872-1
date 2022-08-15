<head>
<title>Lab Task 5</title>
    <link rel="stylesheet" href="assets/src/css/global.css">
    <link rel="stylesheet" href="assets/src/css/table.css">
    <link rel="stylesheet" href="assets/src/css/partials.css">
</head>
<body>
<?php include('assets/src/partials/header.html');?>

    <h2 class="center">Sign Up</h2>
    
    <form action="database/insert.php" method="post">
        <div class="container">
            <table>
                <tr>
                    <th>
                        Username
                    </th>
                    <td class="alpha">
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <th>
                        Email
                    </th>
                    <td class="alpha">
                        <input type="text" name="email">
                    </td>
                </tr>
                <tr>
                    <th>
                        Password
                    </th>
                    <td class="alpha">
                        <input type="text" name="password">
                    </td>
                </tr>
            </table>
        </div>
        <div class="container">
            <button>
                <input type="submit" value="Save">
            </button>

            <button>
                <input type="reset" value="Reset">
            </button>
        </div>
    </form>

    <?php include('assets/src/partials/footer.html');?>
</body>