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

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$date = $_POST['date'];
$location = $_POST['location'];
$message = $_POST['message'];

$sql_query = " insert into contact_form (name,email,subject,date,location,message)
values ('$name','$email','$subject','$date','$location','$message')";
if(mysqli_query($con,$sql_query))
{
    echo "New Details Entry inserted";
}
else{
    echo "Error: " . $sql . "" . mysqli_error($con);

}

mysqli_close($con);

header('location:contact.html');
}
?>