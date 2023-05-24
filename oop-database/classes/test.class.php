<?php


class Test extends Dbh
{
    
    
    public function getPosts()
    {
        $table_name = "php_docker_table";
        $query = "SELECT * FROM $table_name;";
        
        $stmt = $this->connect();
        $result = $stmt->query($query);
        while ($row = $result->fetch_assoc()) {
            echo "<p>".$row['title']."</p>";
            echo "<p>".$row['body']."</p>";
            echo "<p>".$row['date_created']."</p>";
            echo "<hr>";        }
            
    }
    
    
    
    
    
    public function getPostsStmt(int $param_id)
    {
        
        $table_name = "php_docker_table";
        $query = "SELECT * FROM $table_name WHERE id = ?;";
        
        // save the connection to a variable
        $conn = $this->connect();
        $stmt = $conn->prepare($query);
        
        //  $stmt->execute([$param_id]);
        $stmt->bind_param("s", $param_id);
        //  var_dump($conn);
        $stmt->execute();     
        $result = $stmt->get_result();
        
        foreach ($result as $row) {
            echo "<p>".$row['title']."</p>";
            echo "<p>".$row['body']."</p>";
            echo "<p>".$row['date_created']."</p>";
            echo "<hr>";
        }
     
    }
  
 
}