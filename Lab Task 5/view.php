<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/view.css">
</head>

<body>
    <div class="box">
        <div>
            <a href="index.html">Go Back</a>
        </div>
    </div>
    <br>

    <?php
    
    require_once 'connect.php';

    $result = $connection->query("select * from `sample_2`");

    ?>

    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>

            <?php 
            if ($result->num_rows > 0) {  
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row['password']."</td><td><button>Edit</button><button>Delete</button></td></tr>";
                }
            }
            ?>

        </table>
    </div>
</body>

</html>