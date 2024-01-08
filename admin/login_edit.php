<?php
//include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">EDIT Admin Profile</h6>
        </div>

        <div class="card-body">

            <?php

$connection = mysqli_connect("localhost:3307", "root", "", "photography");

            if (isset($_POST['edit_btn'])) 
            {
                $id = $_POST['edit_id'];

                $query = "SELECT * FROM user_form  WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {

            
            ?>

            <form action="login_code.php" method="Post">
                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
           
            <div class="form-group">
                <label>Name</label>
                
                <input type="name" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Name">
            
                <label>Email</label>
                
                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
                
                <label>Password</label>
                
                <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password">
            
                <label>user_type</label>
                
                <input type="user_type" name="edit_user_type" value="<?php echo $row['user_type'] ?>" class="form-control" placeholder="User_type">
            
                
            
            
            </div>


            




            <a href="login_data.php" class="btn btn-danger">Cancel</a>
            <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
            </form>
            <?php
                }
            }
            ?>





        </div>
    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>