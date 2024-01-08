<?php
//include('security.php');

if(isset($_POST['registerbtn']))
{
   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $message = $_POST['message'];

    

    $email_query = "SELECT * FROM contact_form WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: contact_data.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO contact_form (email,name,subject,date,location,message) VALUES ('$email','$name','$subject','$date','$location','$message')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                // $_SESSION['status_code'] = "success";
                header('Location: contact_data.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                // $_SESSION['status_code'] = "error";
                header('Location: contact_data.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            // $_SESSION['status_code'] = "warning";
            header('Location: contact_data.php');  
        }
    }

}

//For update 
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $email = $_POST['edit_email'];
    $name = $_POST['edit_name'];
    $subject = $_POST['edit_subject'];
    $date = $_POST['edit_date'];
    $location = $_POST['edit_location'];
    $message = $_POST['edit_message'];


    $connection = mysqli_connect("localhost:3307", "root", "", "photography");
    $query = "UPDATE contact_form SET    email='$email',name='$name',subject='$subject',date='$date',location='$location',message='$message' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        // $_SESSION['status_code'] = "success";
        header('Location: contact_data.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        // $_SESSION['status_code'] = "error";
        header('Location: contact_data.php'); 
    }
}

//For delete
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $connection = mysqli_connect("localhost:3307", "root", "", "photography");
    $query = "DELETE FROM contact_form WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        // $_SESSION['status_code'] = "success";
        header('Location: contact_data.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        // $_SESSION['status_code'] = "error";
        header('Location: contact_data.php'); 
    }    
}
?>