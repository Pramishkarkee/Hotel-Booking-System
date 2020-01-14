
<title>PHP Star Rating System by using Ajax JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php

//fetch.php

$connect = new PDO('mysql:host=localhost;dbname=myproject', 'root', '');

//$id= $_POST['data11'];
///*
$query = "
SELECT * FROM newcustomer where ID=17
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $rating = count_rating($row['ID'], $connect);
 $color = '';
 $output .= '
 <h3 class="text-primary">give rating</h3>
 <ul class="list-inline" data-rating="'.$rating.'" title="Average Rating - '.$rating.'">
 ';
 
 for($count=1; $count<=5; $count++)
 {
  if($count <= $rating)
  {
   $color = 'color:#ffcc00;';
  }
  else
  {
   $color = 'color:#ccc;';
  }
  $output .= '<li title="'.$count.'" id="'.$row['ID'].'-'.$count.'" data-index="'.$count.'
  "data-customer_id="'.$row['ID'].'" data-rating="'.$rating.'" class="rating" style="cursor:pointer;
   '.$color.' font-size:16px;">&#9733;</li>';
 }

}
echo $output;

function count_rating($customer_id, $connect)
{
 $output = 0;
 $query = "
 SELECT AVG(rating) as rating FROM rating WHERE customer_id = '".$customer_id."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output = round($row["rating"]);
  }
 }
 return $output;
}

//*/
?>