
<?php

//fetch.php

$connect = new PDO('mysql:host=localhost;dbname=myproject', 'root', '');

echo "move";
if(isset($_POST["index"], $_POST["customer_id"]))
{
    
 $query = " INSERT INTO rating(customer_id, rating)  VALUES (:customer_id, :rating) ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':customer_id'  => $_POST["customer_id"],
   ':rating'   => $_POST["index"]
  )
 );
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'done';
 }
}


?>
