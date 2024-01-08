<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    

    </div>
  </div>
</div>


<div class="container-fluid">
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> 
                
                    
                </button>
            </h6>
        </div>

  <div class="card-body">
  <?php

if (isset($_SESSION['success']) && $_SESSION['success'] != '') {

  echo '<h2>' . $_SESSION['success'] . ' </h2>';
  unset($_SESSION['success']);
}

if (isset($_SESSION['status']) && $_SESSION['status'] != '') {

  echo '<h2 class="bg-info">' . $_SESSION['status'] . ' </h2>';
  unset($_SESSION['status']);
}

?>

    <div class="table-responsive">

    <?php
        $connection = mysqli_connect("localhost:3307", "root", "", "photography");

        $query = "SELECT * from contact_form";
        $query_run = mysqli_query($connection, $query);
        ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> ID </th>
              <th> NAME </th>
              <th> EMAIL </th>
              <th> SUBJECT </th>
              <th> DATE </th>
              <th> LOCATION</th>
              <th> MESSAGE </th>
              <th> EDIT </th>
              <th> DELETE </th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (mysqli_num_rows($query_run) > 0) {
              while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['subject']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                  <td><?php echo $row['location']; ?></td>
                  <td><?php echo $row['message']; ?></td>

                  <td>
                    <form action="contact_edit.php" method="post">
                      <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                      <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                    </form>
                  </td>
                  <td>
                    <form action="contact_code.php" method="post">
                      <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                    </form>
                  </td>
                </tr>
            <?php
              }
            } else {
              echo "No Record Found";
            }
            ?>



          </tbody>
        </table>

      </div>
    </div>
  </div>

</div>


<?php
include('includes/scripts.php');
?>