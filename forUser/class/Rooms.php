<?php
require_once "Database.php";
class Room extends Database
{
    public function getRoomDetails($room_type)
    {
        $sql = "SELECT * FROM rooms
        WHERE room_type = '$room_type'";

        return $this->conn->query($sql)->fetch_assoc();
    }

    public function calculateDate($check_in, $check_out)
    {
        // 宿泊日数の計算
        $check_in = new DateTime($check_in);
        $check_out = new DateTime($check_out);
        if ($check_in < $check_out) {
            return $check_out->diff($check_in)->format('%a');
        } else {
        }
    }
}
