<?php
    require_once 'database.php';

    class User extends Database{
        public function createUser($uname, $pass, $fname, $lname, $email){
            $new_pass = md5($pass);

            $sql = "INSERT INTO users(user_name,password,first_name,last_name,email) VALUES('$uname','$new_pass','$fname','$lname','$email')";
            if($this->conn->query($sql)){
                header("Location: ../../register.html");
            }else{
                echo "Insertion failed. ".$this->conn->error;
            }
        }

        public function login($email, $pass){
            $hash_pass = md5($pass);
            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$hash_pass'";
            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                $row = $result->fetch_assoc();

                return $row['user_id'];
            }else{
                return false;
            }
        }

        public function getUsers(){
            $sql = "SELECT * FROM users";
            $result = $this->conn->query($sql);

            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function getSpecificUser($id){
            $sql = "SELECT * FROM users WHERE user_id = $id";

            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();

            return $row;
        }

        public function updateUser($id, $uname, $fname, $lname, $email, $pass){
            $sql = "UPDATE users SET user_name = '$uname', first_name = '$fname', last_name = '$lname', email = '$email', password = '$pass' WHERE user_id = '$id'";
            $result = $this->conn->query($sql);

            if($result){
                header("location: ../../index.html");
            }else{
                echo "Connection Error: ". $this->conn->error;
            }
        }

        public function uploadPost($brandName, $shopName, $place, $price, $tastes, $category, $picture, $comment){
            $sql ="INSERT INTO post(brand_name,shop_name,area,price,tastes,category,picture,comment) VALUES('$brandName','$shopName','$place','$price','$tastes','$category','$picture','$comment')";

            if($this->conn->query($sql)){
                return true;
            }else{
                echo "Cannot posted.".$this->conn->error;
                // return false;
            }
        }

        public function getPost(){
            $sql = "SELECT * FROM post";
            $result = $this->conn->query($sql);

            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

    }


 


?>