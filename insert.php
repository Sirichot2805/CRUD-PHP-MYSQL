<?php

    include_once('function.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $topic = $_POST['topic'];
        $des_topic = $_POST['des_topic'];
        $sql = $insertdata->insert($topic, $des_topic);
        if ($sql) {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">

        <hr>
        <h1 class="mt-5">เพิ่ม</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="topic" class="form-label">หัวข้อ</label>
                <input type="text" class="form-control" name="topic" required>
            </div>
            <div class="mb-3">
                <label for="des_topic" class="form-label">รายละเอียดหัวข้อ</label>
                <input type="text" class="form-control" name="des_topic" required>
            </div>
            <button type="submit" name="insert" class="btn btn-success">เพิ่ม</button>
        </form>
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
