<?php
include_once('connect.php');
$query="SELECT * FROM blood_donor where availablity = 'available'";
$result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Information</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron">
        <div class="card">
            <div class="card-header text-center text-white bg-success lg-3">
                
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Available Donors Information</h5>
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Phone Number</th>
                          <th scope="col">Email</th>
                          <th scope="col">Birth Date</th>
                          <th scope="col">blood_group</th>
                          <th scope="col">Address</th>
                          <th scope="col">COVID19 recovery</th>
                          <th scope="col">Last Donation Date</th>
                    </tr>
                  </thead>
                  <?php
                  	while($rows=mysqli_fetch_assoc($result)){
                  ?>
	                  <tbody>
	                    <tr>
	                          <td><?php echo $rows['last_name']; ?></td>
	                          <td><?php echo $rows['phone_number']; ?></td>
	                          <td><?php echo $rows['email']; ?></td>
	                          <td><?php echo $rows['birth_date']; ?></td>
                            <td><?php echo $rows['blood_group']; ?></td>
	                          <td><?php echo $rows['address']; ?></td>    
                            <td><?php echo $rows['corona_recovery']; ?></td>    
                            <td><?php echo $rows['last_donated']; ?></td>            
	                    </tr>
	                  </tbody>
	                <?php
	            	}
                  	?>
                </table>
            </div>      
        </div>             
        </div>   
    </div>  
</body>