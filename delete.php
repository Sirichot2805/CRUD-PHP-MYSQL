<?php

    include_once('function.php');

    if (isset($_GET['del'])) {
        $no = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($no);
        if ($sql) {
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }

?>
