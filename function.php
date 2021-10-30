<?php

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'crud_oop');

    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }



        public function insert($topic,$des_topic) {
            $result = mysqli_query($this->dbcon, "INSERT INTO tbusers(topic,des_topic) VALUES('$topic',	'$des_topic')");
            return $result;
        }

        public function insertCM($com_des,$no) {
            $result = mysqli_query($this->dbcon, "INSERT INTO tb_com(com_des,no) VALUES('$com_des',	'$no')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM tbusers ");
            return $result;
        }

        public function fetchonerecord($no) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM tbusers WHERE no = '$no'");
            return $result;
        }

        public function fetchonerecordCM($no) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM tb_com WHERE no = '$no'");
            return $result;
        }

        public function update($topic,$des_topic,$no) {
            $result = mysqli_query($this->dbcon, "UPDATE tbusers SET
                topic = '$topic',
                des_topic = '$des_topic' WHERE no = '$no'
            ");
            return $result;
        }

        public function delete($no) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tbusers WHERE no = '$no'");
            $deleterecordCM = mysqli_query($this->dbcon, "DELETE FROM tb_com WHERE no = '$no' ");
            return $deleterecord;
        }

    }


?>
