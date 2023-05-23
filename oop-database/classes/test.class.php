<?php


class Test extends Dbh
{
    public function getPosts()
    {
        $table_name = "php_docker_table";
        $query = "SELECT * FROM $table_name";
        
        $stmt = $this->connect($query);
        while ($row = mysqli_fetch_assoc($stmt)) {
            echo "<p>".$row['title']."</p>";
            echo "<p>".$row['body']."</p>";
            echo "<p>".$row['date_created']."</p>";
            echo "<hr>";        }
    }
}