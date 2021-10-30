<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">
    <h1 class="mt-5">Infomation Page</h1>
    <a href="insert.php" class="btn btn-success">Go to Insert</a>
    <hr>
    <table id="mytable" class="table table-bordered table-striped">
        <thead>
            <th>ลำดับ</th>
            <th>หัวข้อ</th>
            <th>วันที่สร้าง</th>
            <th>เครื่องมือ</th>

        </thead>

        <tbody>
            <?php

                include_once('function.php');
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata();
                while($row = mysqli_fetch_array($sql)) {

            ?>

                <tr>
                    <td><?php echo $row['no']; ?></td>
                    <td><a href="des.php?no=<?php echo $row['no']; ?>" ><?php echo $row['topic']; ?></a></td>
                    <td><?php echo $row['create_date']; ?></td>
                    <td><a href="update.php?no=<?php echo $row['no']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="delete.php?del=<?php echo $row['no']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

            <?php

                }
            ?>
        </tbody>
    </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
