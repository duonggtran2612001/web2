<?php
    class dataprovider {
        private $db="quanlybanhang";
        private $username="adminbanhang";
        private $password="123456";
        private $host="localhost";
        private $conn;

        public function __construct()
        {
            $this->connect();
        }
        public function connect () {
            try {
                if ($this->conn=mysqli_connect($this->host,$this->username,$this->password,$this->db)) {
                    return $this->conn;
                } else {
                    throw new Exception('Khong the ket noi toi database');
                }
            } catch(Exception $e) {
                echo $e->getMessage();
            }
        }
        public function disConnect() {
            if(!(mysqli_close($this->conn)))
                echo "Khong the dong ket noi";
        }
        public function errorSQL () {
            if(!(mysqli_select_db($this->conn,$this->db)))
                echo "khong co database";
        }
        public function executeQuery($sql) {
           mysqli_query($this->conn, "SET NAMES 'utf8'");
            if(!($result=mysqli_query($this->conn,$sql)))
                echo "Khong the thuc thi cau lenh";
            return $result;
        }
        public function insert_update_delete ($sql) {
            if (mysqli_query($this->conn,$sql)) return true;
            else return false;
        }
        public function select($sql='', $return= true) {
            mysqli_query($this->conn,"SET NAMES 'utf8'");
            if($result=mysqli_query($this->conn,$sql)) {
                if ($return===true) {
                    while ($row = mysqli_fetch_array($result)) {
                        $data[] = $row;
                    }
                    mysqli_free_result($result);
                    return $data;
                } else return true;
            } else return false;
        }

    }
?>