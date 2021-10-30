<?php

    include_once('function.php');

    $updatedata = new DB_con();

    if (isset($_POST['update'])) {
        $no = $_GET['no'];
        $topic = $_POST['topic01'];
        $des_topic = $_POST['des_topic01'];

        $sql = $updatedata->update($topic, $des_topic,$no);
        if ($sql) {
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='update.php'</script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <?php
          $no = $_GET['no'];
          $updateuser = new DB_con();
          $sql = $updateuser->fetchonerecord($no);
          while($row = mysqli_fetch_array($sql)) {
        ?>
        <hr>
        <h1 class="mt-5">แก้ไข ลำดับที่ : <a><?php echo $row['no']; ?></a></h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="topic" class="form-label">หัวข้อ</label>
                <input type="text" class="form-control" name="topic01" value="<?php echo $row['topic']; ?>"  required>
            </div>
            <div class="mb-3">
                <label for="des_topic" class="form-label">รายละเอียดหัวข้อ</label>
                <input type="text" class="form-control" name="des_topic01" value="<?php echo $row['des_topic']; ?>" required>
            </div>
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">แก้ไข</button>
        </form>

        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
