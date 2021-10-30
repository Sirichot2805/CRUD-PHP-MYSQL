<?php

    include_once('function.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $no = $_GET['no'];
        $com_des= $_POST['com_des'];
        $sql = $insertdata->insertCM($com_des, $no);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
  <?php
    $no = $_GET['no'];
    $GG= $no;
    $updateuser1 = new DB_con();
    $sql = $updateuser1->fetchonerecord($GG);
    while($row = mysqli_fetch_array($sql)) {
  ?>
    <div class="container">
    <h1 class="mt-5">Description Page</h1>
    <h4>หัวข้อ : <a><?php echo $row['topic']; ?></a></h4>
    <h5>รายละเอียด : <a><?php echo $row['des_topic']; ?></a></h5>
<?php } ?>
<table id="mytable" class="table table-bordered table-striped">
    <thead>
        <th>Comments</th>
        <th>Comment date</th>
    </thead>
        <tbody>
          <?php
            $no = $_GET['no'];
            $updateuser = new DB_con();
            $sql2 = $updateuser->fetchonerecordCM($no);
            while($row = mysqli_fetch_array($sql2)) {
          ?>
          <tr>
              <td><?php echo $row['com_des']; ?></td>
              <td><?php echo $row['com_date']; ?></td>
          </tr>

      <?php } ?>

        </tbody>
    </table>
    <form action="" method="post">

        <div class="mb-3">
            <label for="des_com" class="form-label">Comments : </label>
            <textarea type="text" class="form-control" name="com_des" required></textarea>
        </div>
        <div style="float:right; margin-top: 15px;">
          <button type="submit" style="margin-top: 15px;" name="insert" class="btn btn-success">เพิ่ม</button>
          <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        </div>

    </form>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
