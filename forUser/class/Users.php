<?php
require_once "Database.php";

class User extends Database
{
    public function signUp($first_name, $last_name, $email, $password, $phone_number, $card_number)
    {
        $sql = "INSERT INTO users(first_name,last_name,email,password,phone_number,card_number)
                VALUES ('$first_name','$last_name','$email','$password','$phone_number','$card_number')";

        $result = $this->conn->query($sql);

        if ($result == false) {
            die('CANNOT ADD USER: ' . $this->conn->error);
        } else {
            header("Location: ../views/login.html");
        }
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM users
                WHERE email = '$email'";

        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['last_name'] = $row['last_name'];

                header("Location: ../views/index.php");
            } else {
                return "Invalid Password";
            }
        } else {
            return "Invalid Email";
        }
    }

    public function calculate($check_in, $check_out, $room_type, $number_of_people)
    {
        // 宿泊日数の計算
        $check_in = new DateTime($check_in);
        $check_out = new DateTime($check_out);
        if ($check_in < $check_out) {
            $date = $check_out->diff($check_in)->format('%a');
        } else {
        }

        $sql = "SELECT room_charge FROM rooms
                WHERE room_type = '$room_type'";

        $row = $this->conn->query($sql)->fetch_assoc();
        $room_charge = $row['room_charge'];

        $total = $room_charge * $date * $number_of_people;

        header("Location: ../views/confirm.php");
    }

    public function reserve()
    {
    }
}
