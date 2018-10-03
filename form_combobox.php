<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nama negara dan benuanya</title>
</head>
<body>
    <?php
    //koneksi ke database
    $con = mysqli_connect("localhost","sapa","melbu","trik");
    $query = "SELECT * FROM `countries`";
    $sql = mysqli_query($con, $query);
    ?>
    <form action="" method="POST">
        <select name="negara">
            <?php
            while ($data = mysqli_fetch_array($sql)) {
                ?><option value="<?php echo $data['id'];?>"><?php echo $data['negara'];?></option><?php
            }
            ?>
        </select>

        <input type="submit" value="Go">
    </form>
</body>
</html>