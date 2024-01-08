<?php
    include('includes/header.php');
    include('includes/navbar.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">gallery Edit</h6>

        </div>
    </div>
    <div class="card-body">
       <?php
        if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
        {
            echo '<h2 class="bg-primary text-white"> '.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
        if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
        {
            echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
        ?>
        <?php
            if(isset($_POST['gallery_edit_data_btn'])){
                $id = $_POST['gallery_edit_id'];
                $connection=mysqli_connect("localhost:3307","root","123456","photography");
                $query = "SELECT * FROM gallery WHERE id='$id'";
                $query_run=mysqli_query($connection,$query);

                foreach($query_run as $row)
                {
        ?>
            <form action="code.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="edit_gallery_id" value="<?php echo $row['id'] ?>">

                 
                 

                 <div class="form-group">
                     <label> Upload Image </label>
                     <input type="file" name="gallery_img" id="gallery_img" values="<?php echo $row['images'] ?>" class="form-control">
                 </div>

                 <a href="gallery.php" class="btn btn-danger">Cancel</a>
                 <button type="submit" name="gallery_update_btn" class="btn btn-primary">Update</button>
        </form>
        <?php

                }
            }
        ?>
        
    </div>
</div>

<?php
include('includes/scripts.php');

?>