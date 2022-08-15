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
        /*if ($result->num_rows > 0) {  
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row['password']."</td><td><button>Edit</button><button>Delete</button></td></tr>";
                }
            }*/
        ?>

        <?php
        while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                    <a href="../database/view.php?edit=<?php echo $row['id']; ?>">Edit</a>
                    <a href="../database/view.php?delete=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>

    </table>
</div>

<div class="updateData">
    <form method="post">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <h4>Updating <?php echo $username; ?> ... ...</h4>

        <table>
            <tr>
                <!-- <th>Name</th> -->
                <td>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                </td>
            </tr>
            <tr>
                <!-- <th>Email</th> -->
                <td>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                </td>
            </tr>
            <tr>
                <!-- <th>Password</th> -->
                <td>
                    <input type="text" name="password" value="<?php echo $password; ?>">
                </td>
        </table><br>
        <p align="center"><input type="submit" value="Update" name="update"></p>
    </form>
</div>

</body>

</html>