<head>
 <link rel="stylesheet" a href="css/bootstrap.css"/>
    <link rel="stylesheet" a href="css/funds.css"/>
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/properjs.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>   
<?php
$n=0;
while($n < 4)
//fetch.php
{
$connect = new PDO('mysql:host=localhost;dbname=myproject', 'root', '');


$query = "
SELECT * FROM newcustomer where ID=18
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
  
 <ul class="list-inline" data-rating="'.$rating.'" title="Average Rating - '.$rating.'" style="margin-left:50px;">
 ';
 //echo hey(); 
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


$n++;
}
function count_rating($customer_id, $connect)
{
  //echo $customer_id;
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