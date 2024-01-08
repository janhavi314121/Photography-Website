<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<div classs="containerr py-5">
    <div class="row mt-4">
    <?php
    require 'admin/database/dbconfig.php';
    $query = "SELECT * from gallery";
    $query_run = mysqli_query($connection, $query);
    $check_gallery = mysqli_num_rows($query_run) > 0;

    if ($check_gallery)
    {
        while($row = mysqli_fetch_array($query_run));
        {
            ?>
             <div class="col-md-4">
            <div class="card">
                <div class="card=body">
                    <img src="" class="card-img-top" alt="gallery Images">
                    
                </div>
            </div>

        </div>
                <?php
       
        }
    }
    else
    {
        echo"No image Found";
    }

    ?>
       
    </div>
</div>
<?php include('includes/footer.php'); ?>
