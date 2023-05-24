<?php


class UserView extends Users
{
    public function showAllUsers()
    {
        $datas = $this->getAllUsers();
        foreach ($datas as $data) {
            echo "Fullname: " . $data['first_name'] . " " . $data["last_name"] . " " . "<br>";
            echo "Date of Birth: " . $data['dob'] . "<br>";
            echo "<hr>";
        }
    }
}