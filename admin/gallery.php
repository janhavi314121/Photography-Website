<?php 
session_start();
 include('includes/header.php');
 include('includes/navbar.php');
 ?>


<!-- Modal -->
<div class="modal fade" id="gallerymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">gallery</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      

      <div class="form-group">
       <label>Upload Image</label>
       <input type="file" name="gallery_image" id="gallery_image" class="form-control"required>
      </div>

      



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save_gallery" class="btn btn-primary">Save </button>
      </div>
    </form>
    </div>
  </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> gallery
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gallerymodal">
                    ADD 
                </button>
            </h6>
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
         <div class="table-responsive">
                <?php
                    $connection=mysqli_connect("localhost:3307","root","123456","photography");
                    $query = "SELECT * FROM gallery";
                    $query_run=mysqli_query($connection, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        
                        ?>
                  
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    </tbody>
                    <?php
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                
                                 <td><?php echo '<img src="upload/'.$row['images'].'" width="100px;" height="100px;" alt="gallery Image">'?></td>

                                <td> 
                                    <form action="gallery_edit.php" method="POST">
                                            <input type="hidden" name="gallery_edit_id" value="<?php echo $row['id'] ?>">
                                            <button type="submit" name="gallery_edit_data_btn" class="btn btn-success">Edit</button>
                                    </form>
                                </td>
                                <td> 
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="gallery_delete_id" value="<?php echo $row['id'] ?>">
                                        <button type="submit" name="gallery_delete_btn"  class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td>
                                    >
                            </tr>
                        <?php

                            }
                        ?>
                        
                    </tbody>
                </table>
                <?php
                    }
                    else{
                        echo "No Record Found";
                    }
                ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/.container-fluid-->
<?php 
 include('includes/scripts.php');
//  include('includes/footer.php');
 ?>