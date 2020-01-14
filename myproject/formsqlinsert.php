<?php
error_reporting(0);
$hname=$_POST['hname'];
$hcontact=$_POST['hcontact'];
$hemail=$_POST['hemail'];
$imgname=$_FILES['uploadfile']['name'];
$tempname=$_FILES['uploadfile']['tmp_name'];
move_uploaded_file($tempname,"./admin/$imgname");
//move_uploaded_file($tempname,"./admin/$imgname");
$categary=$_POST['category'];
$capicity=$_POST['hroom'];
$place=$_POST['place'];
$city=$_POST['city'];
$street=$_POST['street'];
$minprice=$_POST['minprice'];
$maxprice=$_POST['maxprice'];

if($bathroom=='on')
{
    echo "bathroom";
}
else{
    $bathroom='null';
}
$dbed=$_POST['double'];
if($dbed=='on')
{
    echo "double bed";
}
else{
    $dbed='null';
}
$sbed=$_POST['single_bed'];
if($sbed=='on')
{
    echo "single bed";
}
else{
    $sbed='null';
}
$tv=$_POST['tv'];
if($tv=='on')
{
    echo "tv";
}
else{
    $tv='null';
}
$ac=$_POST['ac'];
if($ac=='on')
{
    echo "ac";
}
else{
    $ac='null';
}
$rservice=$_POST['room_service'];
if($rservice=='on')
{
    echo "room service";
}
else{
    $rservice='null';
}
$wifi=$_POST['wifi'];
if($wifi=='on')
{
    echo "wifi";
}
else{
    $wifi='null';
}
$heater=$_POST['heater'];
if($heater=='on')
{
    echo "wifi";
}
else{
    $heater='null';
}
$bath_top=$_POST['bath_top'];
if($bath_top=='on')
{
    echo "wifi";
}
else{
    $bath_top='null';
}
$parking=$_POST['parking'];
if($parking=='on')
{
    echo "parking";
}
else{
    $parking='null';
}
$bar=$_POST['bar'];
if($bar=='on')
{
    echo "bar";
}
else{
    $bar='null';
}
$massage=$_POST['massage'];
if($massage=='on')
{
    echo "wifi";
}
else{
    $massage='null';
}
$elevator=$_POST['elevator'];
if($elevator=='on')
{
    echo "wifi";
}
else{
    $elevator='null';
}
$conference=$_POST['conference'];
if($conference=='on')
{
    echo "wifi";
}
else{
    $conference='null';
}
$banqueat=$_POST['banqueat'];
if($banqueat=='on')
{
    echo "wifi";
}
else{
    $banqueat='null';
}
$rimg1=$_FILES['rimg1']['name'];
$tmprimg1=$_FILES['rimg1']['tmp_name'];
move_uploaded_file($tmprimg1,"./admin/$rimg1");
$rimg2=$_FILES['rimg2']['name'];
$tmprimg2=$_FILES['rimg2']['tmp_name'];
move_uploaded_file($tmprimg2,"./admin/$rimg2");
$rimg3=$_FILES['rimg3']['name'];
$tmprimg3=$_FILES['rimg3']['tmp_name'];
move_uploaded_file($tmprimg3,"./admin/$rimg3");
include('dbconnection.php');
//echo "jhehrhfkasdjyrfisjdflhkjdgskdh";
//echo $imgname."image";
//$map=$_POST['map'];
//mysqli_select_db($conn,'newcustomer');
//extract($_POST);
//if(isset($_POST['submit']))
    





$query="INSERT INTO `newcustomer`(`hname`, `hcontact`, `himg`, `category`, `hroom`, `city`, `street`, `hemail`, 
`bathroom`, `double_bed`, `single_bed`, `tv`, `ac`, `room_service`, `wifi`, `left_view`, `right_view`, `washroom_view`, 
`min_rate`, `max_rate`, `heater`, `bath_top`, `parking`, `bar`, `massage`, `elevator`, `conference`, `banqueat`)
 VALUES ('$hname','$hcontact','$imgname','$categary','$capicity','$city','$street','$hemail','$bathroom','$dbed',
 '$sbed','$tv','$ac','$rservice','$wifi','$rimg1','$rimg2','$rimg3','$minprice','$maxprice',
 '$heater','$bath_top','$parking','$bar','$massage','$elevator','$conference','$banqueat')";
 $run=mysqli_query($conn,$query);
//$fquery="SELECT * FROM `searchdata`";
//$frun=mysqli_query($conn,$fquery);
//while($fdata=mysqli_fetch_assoc($frun))
//{
  //$qsearch1="SELECT  `hname` FROM `searchdata` WHERE `hname`!='$hname'";
  //$search=mysqli_query($conn,$qsearch1);
//$q2="SELECT  `hname` FROM `searchdata` WHERE $place!=$fdata['hname']";
//$search=mysqli_query($conn,$q2);
//$q3="SELECT  `hname` FROM `searchdata` WHERE $city!=$fdata['hname']";
//$search=mysqli_query($conn,$q3);
//while($sedata=mysqli_fetch_assoc($search))
//{
//$q4="INSERT INTO `searchdata`(`hname`) VALUES ('$hname')";
//$search=mysqli_query($conn,$q4);
//}
//$qsearch1="SELECT  `hname` FROM `searchdata` WHERE `hname`!='$street'";
 // $search1=mysqli_query($conn,$qsearch1);
  //while($sedata1=mysqli_fetch_assoc($search1))
  //{
    $q4="INSERT INTO `searchdata`(`hname`) VALUES ('$hname')";
    $search=mysqli_query($conn,$q4);
  //}
//}*/
//header('location:formhtml.php');
if($run)
{
    ?><script>
    alert("Thanks for being a partner of TravelNepal");
    </script>
    <?php
    header('location:memberplatform.php');
} 
else
{
    echo"sorry";
}

 ?>