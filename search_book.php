<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

    require 'conn.php';
    if (isset($_POST['search'])) {
    ?>

    <table class="table table-bordered table-stripted" style="width:500px;">
    <thead>
    <tr>
    <th>Book</th>
    <th>Author</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $keyword = $_POST['keyword'];

    $query = mysqli_query($conn, "SELECT * FROM `book1` WHERE `title` LIKE '%$keyword%' or `author` LIKE
    '%keyword%'") or die(mysqli_error($conn));

    $count = mysqli_num_rows($query);

    if ($count > 0) {
        while ($fetch = mysqli_fetch_array($query)) {
            ?>
            <tr>
            <td><?php echo $fetch['title'] ?></td>
            <td><?php echo $fetch['author'] ?></td>
            </tr>

            <?php
        }
    } else {
        echo "<tr><td colspan='2' class='text-danger'><center>No result found!</center></td></tr>";
    }
    ?>
    </tbody>
    </table>
    <?php
    } else {
    ?>
    <table class="table table-bordered table-stripted" style="width:500px;">
    <thead">
    <tr>
    <th>Book</th>
    <th>Author</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $query = mysqli_query($conn, "SELECT * FROM `book1` ORDER BY `title` ASC") or die(mysqli_error
    ($conn));
    while ($fetch = mysqli_fetch_array($query)) {
        ?>
        <tr>
        <td><?php echo $fetch['title'] ?></td>
        <td><?php echo $fetch['author'] ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
    </table>
    <?php
    }
    ?>

</body>
</html>