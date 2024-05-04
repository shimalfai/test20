<?php
include('connects.php');
include('functions.php');

session_start();
if (!isset($_SESSION['fname'])) {
  header('location:login.php');
}
if (isset($_GET['id']))
  $id = $_GET['id'];
$get_user_informaion_sql = "SELECT * FROM children WHERE child_id = '" . $child_id . "'";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="parents.css">
  <title>Update</title>
</head>

<body>
  <h3 style="text-align: center;">Update details</h3>
  <hr>
  <?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM children where child_id = '" . $id . "'";
    $result = $mysqli->query($query);
  }


  if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
  ?>
      <form class="update" action="update_insert.php?<?php echo $rows['child_id']; ?>" method="POST">
      
        <div class="mb-3">
          <label for="Name" class="form-label">Name</label>
          <input type="text" class="form-control" id="Name" value="<?php echo $rows['Name']; ?>">
        </div>
        <div class="mb-3">
          <label for="NID" class="form-label">NID</label>
          <input type="text" class="form-control" id="NID" value="<?php echo $rows['NID']; ?>">
        </div>
        <div class="mb-3">
          <label for="DOB" class="form-label">DOB</label>
          <input type="text" class="form-control" id="DOB" value="<?php echo $rows['DOB']; ?>">
        </div>
        <div class="mb-3">
          <label for="Address" class="form-label">Address</label>
          <input type="text" class="form-control" id="DOB" value="<?php echo $rows['Address']; ?>">
        </div>
        <input type="submit" name="Update" class="btn btn-primary" value="Update">
      </form>

  <?php 
    }
  } 

  ?>
</body>

</html>