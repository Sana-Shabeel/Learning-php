<?php

class Users extends Dbh
{
    protected function getAllUsers()
    {
        $sql = "SELECT * FROM users";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    protected function setUser($first_name, $last_name, $dob)
    {
        $sql = "INSERT INTO users(first_name, last_name, dob) VALUES (?, ?, ?)";
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $first_name, $last_name, $dob);
        $stmt->execute();
        $stmt->close();
    }
    
    protected function getUser($first_name)
    {
        $sql = "SELECT * FROM users WHERE first_name = ?";
        // save the connection
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $first_name);
        $stmt->execute();
        $result = $stmt->get_result();
        $numRows = $result->num_rows;
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
        $stmt->close();
    }
}
