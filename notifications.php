<!DOCTYPE html>
<html lang="en">
<?php
    include "components/_links.php";
    include "components/_scripts.php";
    include "backend/dbcon.php";
?>
    <title>Document</title>
</head>
<body>
<?php
    include "components/_navbar3.php";

?>
<div class="container my-5">
    <h1>notification</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type</th>
      <th scope="col">Statement</th>
      
    </tr>
  </thead>
  <tbody>
      
      <?php
    $query = "SELECT * FROM `notifications`";
    $query_run = mysqli_query($connection,$query);
    while($not = mysqli_fetch_assoc($query_run)){
        echo '
        
        
        
    <tr>
      <th scope="row">'.$not['not_id'].'</th>
      <td>'.$not['not_type'].'</td>
      <td>'.$not['not_statement'].'</td>
    </tr>
    
    
    
    ';
}


?>
</tbody>
</table>
</div>

    <?php
    include "components/_footer.php";

?>
</body>
</html>