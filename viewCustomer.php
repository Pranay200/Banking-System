<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content=" width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f1045cddcf.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css">
  

  
  <title>Bank of TSF</title>
  <link rel="shortcut icon" href="TsfLogo.png" type="image/x-icon">
  
  <style type="text/css">
    .transact-table{
  border-collapse: collapse;
  margin-left: auto;
  margin-right: auto;
  margin-top: 50px;
  width: 650px;
  text-align: center;
  font-size: 0.9em;
}

.transact-table thead tr{
  background-color: #6495ED;
  color: black;
  
}

.transact-table th,
.transact-table td{
  border: 1px solid #ddd;
  padding: 8px;
}


.transact-table tbody tr:nth-child(even){
  background-color: #f3f3f3;
}



  </style>
</head>
<body>
<!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="imgnav" src="TsfLogo.png" alt="logo" style="width:40px;" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto justify-content-end">
            <li class="nav-item active">
              <a style="color: #6495ED; font-size: 25px; margin-left: 40px;"class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a style="color: white; font-size: 25px; margin-left: 40px;" class="nav-link" href="#">VIEW CUSTOMERS</a>
            </li>
            <li class="nav-item">
              <a style="color: #6495ED; font-size: 25px; margin-left: 40px;"class="nav-link" href="moneytransfer.php">MAKE TRANSACTION<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a style="color: #6495ED; font-size: 25px; margin-left: 40px;"class="nav-link" href="transacthistory.php">HISTORY</a>
            </li>
          </ul> 
        </div>
      </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- End of Navbar -->

  
<?php
    include 'config.php';
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn,$sql);
?>

<!--Table-->
<h2 style="text-align: center; margin-top:40px; font-family: 'Roboto', cursive;">CUSTOMERS</h2>
<table class="transact-table">
  <thead>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email Id</th>
    <th>Balance</th>
  </tr>
  </thead>

<tbody>
  <?php 
        while($rows=mysqli_fetch_assoc($result)){
    ?>
        <tr style="color : black;">
            <td class="py-2"><?php echo $rows['id'] ?></td>
            <td class="py-2"><?php echo $rows['name']?></td>
            <td class="py-2"><?php echo $rows['email']?></td>
            <td class="py-2"><?php echo $rows['balance']?></td>
          
                <?php
                    }
                ?>
</tbody>
  
</table>
<!--End of Table-->



  <!-- Footer -->
  <?php
  include "footer.php";
  ?>
  <!-- End Footer -->

</body>
</html>