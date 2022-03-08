    <div class="container">
    <?php echo $this->base_url; ?>
    <br>
    <h1>Contact test page</h1>
    
    <?php 
        foreach($data['model']->seo() as $seo){
            echo "<br>".$seo;
        } 
        echo "<hr>Current Uri Path- ";
        $this->segment(1);        
    ?>
    <hr>
    <?php 
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><td>id</td><td>name</td><td>email</td></tr>";
        foreach($data['model']->all('users') as $row){
            echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["email"]."</td></tr>";
        }
        // print_r($data['user']);
        echo "</table>";
    ?>
    </div>