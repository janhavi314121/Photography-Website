<?php


if(isset($_POST['save_gallery'])) 
{
    $connection=mysqli_connect("localhost:3307","root","123456","photography");

  
    $images = $_FILES['gallery_image']['name'];

 
    
     
     $query="INSERT INTO gallery(`images`) VALUES('$images')";
     $query_run=mysqli_query($connection,$query);

     if($query_run)
     {
        move_uploaded_file($_FILES["gallery_image"]["tmp_name"],"upload/".$_FILES["file"]["id"]);
        $_SESSION['status']='gallery added';
        $_SESSION['status_code'] = "success";
        header('Location:gallery.php');
     }
     else
     {
        $_SESSION['status']='gallery not added';
        header('Location:gallery.php');
     }
    }


if(isset($_POST['gallery_update_btn']))
{
    $edit_gallery_id = $_POST['edit_gallery_id'];
  
    $gallery_img = $_FILES["gallery_img"]['name'];
 
    
            
        
    
    $connection=mysqli_connect("localhost:3307","root","123456","photography");
    $query = "UPDATE gallery SET name ='$images='$gallery_img' WHERE id='$edit_gallery_id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
            if($gallery_img == NULL){
               $_SESSION['status'] = " Product Updated with existing image";
               $_SESSION['status_code'] = "success";
                header('Location:gallery.php');
            }
            else{
                move_uploaded_file($_FILES["gallery_img"]["tmp_name"],"upload/".$_FILES["gallery_img"]["name"]);
                $_SESSION['status'] = " gallery Updated";
                $_SESSION['status_code'] = "success";
                header('Location:gallery.php');
            }
            
        }
    }
    else{
            $_SESSION['status'] = "gallery Not Updated";
            $_SESSION['status_code'] = "error";
            header('Location:gallery.php');
        }






$connection=mysqli_connect("localhost:3307","root","123456","photography");

if(isset($_POST['gallery_delete_btn']))
{
    $id= $_POST['gallery_delete_id'];

    $query="DELETE FROM gallery WHERE id='$id' ";
    $query_run =mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']= "product data is deleted";
        header("Location:gallery.php");
    }
    else{
        $_SESSION['status']= "product data is not deleted";
        header("Location:gallery.php");
    }
}

?>


<?php
$connection=mysqli_connect("localhost:3307","root","123456","photography");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if(strlen($password) >= 6){

            if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
        }
        else{
            $_SESSION['status'] = "Password length less than 6 characters";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php'); 
        }
        
    }

}

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }
}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email']; 
    $password_login = $_POST['password']; 

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['username'] = $email_login;
        $_SESSION['status_code'] = "success";

        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        $_SESSION['status_code'] = "error";
        header('Location: login.php');
   }
    
}



?>