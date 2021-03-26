<?php
require_once "Database.php";

class User extends Database
{
    public function getUser($user_id)
    {
        $sql = "SELECT * FROM users 
                WHERE user_id = '$user_id'";

        $result = $this->conn->query($sql);

        if ($result == false) {
            die('CANNOT GET USER: ' . $this->conn->error);
        } else {
            return $result->fetch_assoc();
        }
    }

    public function getReservations($user_id)
    {
        $sql = "SELECT * FROM reservations 
                WHERE user_id = '$user_id'";

        $reservations = $this->conn->query($sql)->fetch_assoc();
        $room_id = $reservations['room_id'];

        $sql = "SELECT room_type FROM rooms
                WHERE room_id = '$room_id'";

        $room_type = $this->conn->query($sql)->fetch_assoc();

        return array_merge($reservations, $room_type);
    }

    public function signUp($first_name, $last_name, $email, $password, $phone_number, $card_number)
    {
        $sql = "INSERT INTO users(first_name,last_name,email,password,phone_number,card_number)
                VALUES ('$first_name','$last_name','$email','$password','$phone_number','$card_number')";

        $result = $this->conn->query($sql);

        if ($result == false) {
            die('CANNOT ADD USER: ' . $this->conn->error);
        } else {
            header("Location: ../views/login.php");
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

    public function reserve($user_id, $check_in, $check_out, $room_type, $number_of_people, $total, $uri)
    {
        $sql = "SELECT * FROM rooms
                WHERE room_type = '$room_type'
                AND status = '1'";

        $result = $this->conn->query($sql);

        if ($result->num_rows == 0) {
            //予約の空きなし
        } else {
            $room = $result->fetch_assoc();
            if ($room['capacity'] < $number_of_people) {
                $error[] = "over capacity";
            }
            if ($check_in > $check_out) {
                $error[] = "enter correct date";
            }
            if (isset($error)) {
                return $error;
                // header("Location: ../views/login.php");
            }
            $room_id = $room['room_id'];
        }

        $sql = "INSERT INTO reservations(user_id,room_id,check_in,check_out,number_of_people,total,status)
                VALUES ('$user_id','$room_id','$check_in','$check_out','$number_of_people','$total','1')";

        $result = $this->conn->query($sql);

        $sql = "UPDATE rooms SET status = 0
                WHERE room_id = '$room_id'";
        $this->conn->query($sql);

        if ($result == false) {
            die('CANNOT RESERVE: ' . $this->conn->error);
        } else {
            header("Location: ../views/reserveDone.php");
        }
    }
}
