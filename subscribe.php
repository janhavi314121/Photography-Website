<?php
$con = mysqli_connect('localhost:3307','root',"");

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}
mysqli_select_db($con , 'photography');
if(isset($_POST['save']))
{

$email = $_POST['email'];

$sql_query = " insert into subscribe (email)
values ('$email')";
if(mysqli_query($con,$sql_query))
{
    echo "New Details Entry inserted";
}
else{
    echo "Error: " . $sql . "" . mysqli_error($con);

}

mysqli_close($con);

header('location:index.html');
}
?>