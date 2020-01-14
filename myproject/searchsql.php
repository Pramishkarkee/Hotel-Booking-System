<?php  include('dbconnection.php');
//echo"welcome";
if(isset($_POST["query"]))
{
   // echo "jsdhjks";
    $output = '';
    $query="SELECT *FROM searchdata WHERE hname LIKE '%".$_POST["query"]."%'";
    
    $reasult=mysqli_query($conn,$query);
    $output='<ul class="list-unstyled">';
    if(mysqli_num_rows($reasult)>0)
    {
        //echo"row";
        while($data1=mysqli_fetch_assoc($reasult))
        {
            
            $output .='<li>'.$data1['hname'].'</li>' ;
            //echo"in";
          }

    }
    else
    {
        $output.='<li>not found</li>';
    }
    $output .='</ul>';
    echo $output;
}
?>