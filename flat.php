<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration </title>
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery.js"></script>
		
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</head>
	
	 

<body>

    <div class="container" > 
	<h1>Welcome to the flatbricks</h1>
	  <form action="" method="POST" role="form">
	                    <div class="row">
			               <div class="col-lg-2">
						   
							<label for="">Select Flat</label>
					<select class="form-control" method="POST" name="flat">
						<option value="1BHK">1BHK</option>
						<option value="2BHK">2BHK</option>
					</select>     
			</div>
                <div class="col-lg-3">
				            <label for="">Select Area</label>
					<select class="form-control" name="area">
						<option value="Amritsar">Amritsar</option>
						<option value="Jalandhar">Jalandhar</option>
					</select>
	</div>
</div>
<div class="row"><p></p></div>
	<div class="row">
            <div class="col-lg-6">
			<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit" />	
			</div>
		</div>
</form>
</body>
</html>








<?php 

		include 'db_connnection.php';
		$conn = OpenCon();
		
		if(isset($_POST['submit'])){
							
				$flat = $_POST['flat'];
				$area = $_POST['area'];
				
		}

            $sql = "SELECT * FROM `flat` WHERE `flat_type`=\"$flat\"  AND `area`=\"$area\" ";
			$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	   echo "<table class=\"table table-hover\"> <thead> <tr> <th>flat_type</th> <th>area</th> <th>rent</th> <th>owner_name</th><th>owner_number</th>  </tr></thead>";
    while($row = $result->fetch_assoc()) {
       echo "<tr>";
	   echo "<td>" . $row['flat_type'] . "</td>";
       echo "<td>" . $row['area'] . "</td>";
       echo "<td>" . $row['rent'] . "</td>";
       echo "<td>" . $row['owner_name'] . "</td>";
	   echo "<td>" . $row['owner_phone'] . "</td>";
	   echo "</tr>";
  }
echo "</table>";
} else {
    echo "0 results";
}

	echo "</div>";
         


		CloseCon($conn);
	?>
	

