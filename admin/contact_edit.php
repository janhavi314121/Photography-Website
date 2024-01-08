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

                $query = "SELECT * FROM contact_form  WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {

            
            ?>

            <form action="contact_code.php" method="Post">
                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
           
            <div class="form-group">
                <label>Name</label>
                
                <input type="name" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Name">
            
                <label>Email</label>
                
                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
                <label>Subject</label>
                
                <input type="subject" name="edit_subject" value="<?php echo $row['subject'] ?>" class="form-control" placeholder="Enter Suject">
            
                <label>Date</label>
                
                <input type="date" name="edit_date" value="<?php echo $row['date'] ?>" class="form-control" placeholder="Enter Date">
            
                <label>Location</label>
                
                <input type="location" name="edit_location" value="<?php echo $row['location'] ?>" class="form-control" placeholder="Enter Location">
            
                <label>Message</label>
                
                <input type="message" name="edit_message" value="<?php echo $row['message'] ?>" class="form-control" placeholder="Enter Message">
            
            
            </div>


            




            <a href="contact_data.php" class="btn btn-danger">Cancel</a>
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