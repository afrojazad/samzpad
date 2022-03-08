<div class="container">
<h1>Select field example</h1>
<?php 
echo "<table border='1' cellpadding='10'>";
echo "<tr><td>id</td><td>name</td><td>email</td><td>type</td></tr>";
foreach($data['user'] as $row){
    echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["email"]."</td><td>".$row["user_type"]."</td></tr>";
}
// print_r($data['user']);
echo "</table>";
?>
</div>