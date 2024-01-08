<?php
//include('security.php');

if(isset($_POST['registerbtn']))
{
   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $name = $_POST['name'];
    $user_type = $_POST['user_type'];
    

    

    $email_query = "SELECT * FROM user_form WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: login_data.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO user_form (email,name,password,user_type) VALUES ('$email','$name','$password','$user_type')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                // $_SESSION['status_code'] = "success";
                header('Location: login_data.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                // $_SESSION['status_code'] = "error";
                header('Location: login_data.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            // $_SESSION['status_code'] = "warning";
            header('Location: login_data.php');  
        }
    }

}

//For update 
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $email = $_POST['edit_email'];
    $name = $_POST['edit_name'];
    $password = $_POST['edit_password'];
    $user_type = $_POST['edit_user_type'];
    


    $connection = mysqli_connect("localhost:3307", "root", "", "photography");
    $query = "UPDATE user_form SET    email='$email',name='$name',password='$password',user_type='$user_type' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        // $_SESSION['status_code'] = "success";
        header('Location: login_data.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        // $_SESSION['status_code'] = "error";
        header('Location: login_data.php'); 
    }
}

//For delete
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $connection = mysqli_connect("localhost:3307", "root", "", "photography");
    $query = "DELETE FROM user_form WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        // $_SESSION['status_code'] = "success";
        header('Location: login_data.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        // $_SESSION['status_code'] = "error";
        header('Location: login_data.php'); 
    }    
}
?>