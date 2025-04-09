<?php include 'navbar.php';
include 'sidebar.php';

include 'config.php';
$id = $_GET['id'];
?>

<!--  
	Content body start
***********************************-->
<div class="content-body">
	<div class="container-fluid">
		<!-- <div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Property</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Add Property</a></li>
			</ol>
		</div> -->
		<!-- row -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Add Property</h4>
					</div>
                    <?php
    // Display the images from the database in the sequence of their IDs
    $sql = "SELECT * FROM `property` WHERE `id`= '$id'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      
        
    
?>
					<div class="card-body">
						<form  action="updateAction.php" method="post" enctype="multipart/form-data" >
							<div class="row">
							<div class="mb-3 col-lg-4 col-md-6">
                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id" id="">
									<label class="form-label">Property title</label>
									<input type="text" name="title" value="<?php echo $row['title'];?>"  class="form-control" placeholder="title" 0="">
								</div>

								<div class="mb-3 col-lg-4 col-md-6">
									<label class="form-label">Property Type</label>
									<input type="text" name="category" value="<?php echo $row['category'];?>" class="form-control" placeholder="office,villa,apartment" 0="">
								</div>
											
								<div class="mb-3 col-lg-4 col-md-6">
									<label class="form-label">BedRooms</label>
									<input type="number" value="<?php echo $row['beds'];?>" name="beds"  class="form-control" placeholder="1" 0="">
								</div>
								<div class="mb-3 col-lg-4 col-md-6">
									<label class="form-label">BathRooms</label>
									<input type="number" value=" <?php echo $row['baths'];?>" name="baths" class="form-control" placeholder="1" 0="">
								
								</div>
								<div class="mb-3 col-lg-4 col-md-6">
									<label class="form-label">Area</label>
									<input type="text" name="area" value="<?php echo $row['area'];?>" class="form-control" placeholder="85 sq ft">
								</div>
								
								<div class="mb-3 col-lg-4 col-md-12">
									<label class="form-label">Updated date</label>
									<input type="date" name="listedDate"  value="<?php echo $row['listedDate'];?>" class="form-control" placeholder="2/28/2024">
									
								</div>

								<div class="mb-3 col-lg-4 col-md-6">
									<label class="form-label">country</label>
									<input type="text" name="country"  value="<?php echo $row['country'];?>" class="form-control" name="" id="" placeholder="state/country" >
								</div>

								<div class="mb-3 col-lg-4 col-md-6">
									<label class="form-label">city/town</label>
									<input type="text" name="city" value="<?php echo $row['city'];?>" class="form-control" placeholder="city.." 0="">
								</div>
								

								<div class="mb-3 col-lg-4 col-md-6">
									<label class="form-label">Address</label>
									<input type="text" name="address" value="<?php echo $row['address'];?>" class="form-control" placeholder="Address of your property">
								</div>
								<div class="mb-3 col-lg-4 col-md-6">
									<label class="form-label">Zip Code</label>
									<input type="text" value="<?php echo $row['zipcode'];?>" name="zipcode" id="zip_code" class="form-control" placeholder="Enter pin code" 0="">
								</div>
		
								<div class="mb-3 col-lg-4 col-md-6">
									<label class="form-label">State</label>
									<input type="text" value="<?php echo $row['state_id'];?>" name="state_id" class="form-control" placeholder="" 0="">
								</div>

								<div class="mb-3 col-lg-4 col-md-6">
									<label class="form-label">map</label>
									<input type="text" value=" <?php echo $row['map'];?> "   name="map" class="form-control" placeholder="1" 0="">
								</div>
								

								<div class="mb-3 col-lg-4 col-md-6">
									<label class="form-label">Matterport</label>
									<input type="text" value=" <?php echo $row['video'];?> " name="video"  class="form-control" placeholder="" 0="">
								</div>
								<div class="mb-3 col-lg-4 col-md-6">
                                <img src="uploads/<?php echo $row['featureImg']; ?>" alt="" height="100px" width="100px">
									<label class="form-label">Feature Image</label>
									<input type="file" value=" <?php echo $row['featureImg'];?> " name="featureImg"  class="form-control" placeholder="" 0="">
                                    
								</div>

								<div class="mb-3 col-lg-4 col-md-6">
                                <h1>All Images</h1>
      <?php
      $imagePaths = $row['images'];
      $imagePaths = explode(",",$imagePaths);
      foreach ($imagePaths as $imagePath) {
          echo '<img src="uploads/' . $imagePath . '" alt="Image" height="100px" width="100px" style="margin: 3px">';
      }
      ?>
									<input type="file"  name="images[]" multiple  class="form-control" placeholder="" 0="">
								</div>

								<div class="mb-3 col-lg-4 col-md-6" >
								<div class="row mb-4">
 <div class="col">
    <div class="form-outline">
    <label class="form-label" for="form6Example1">Advantages</label>
    <ul id="todo-list">
    <?php 
   
   $amenities = $row['amenities'];
   $amenities = explode(",",$amenities);
   foreach ($amenities as $amenity) {
    ?>  
    <li id="todo-list">
    <input type="text" class="form-control" name="advantages[]" value="<?php echo $amenity ?>" placeholder="Add new task..." style="width: 50%;  display:inline-block;"/>
          <button type="button" class="btn btn-danger" onclick="removeTaskField(this)">- </button>
    </li>

    <?php } ?>
</ul>
<button type="button" id="addButton" onclick="addTaskField()">+ Add</button>

    </div>
    </div> 
								</div>
								</div>

								<div class="mb-3 col-12">
									<label class="form-label">Description</label>
									
									<textarea class="form-control"  name="description" rows="4"><?php echo $row['description'];?></textarea>
								</div> 

								<div class="col-12 mb-3">
									<input type="submit" class="btn btn-info" name="updateProperty" value=" property" id="">
								</div>

								
							</div>
						</form>
					  
						
					</div>

                    <?php } ?>
				</div>
			</div>

            
		</div>
	</div>
</div>


<!--**********************************
	Content body end
***********************************-->
    <!-- datatable -->

    

    <!-- datatable end -->


<script>
    function addAmenityField() {
        let list = document.getElementById("amenities-list");
        let li = document.createElement('li');
        li.style.display = "block"; // You can adjust the display style as needed.

        li.innerHTML =
            `
            <input type="text" class="form-control" name="amenities[]" placeholder="" style="width: 50%;  display:inline-block;"/>
            <button type="button" class="btn btn-danger" onclick="removeAmenityField(this)">-</button>
        `;
        list.appendChild(li);
    }

    function removeAmenityField(button) {
        let li = button.parentNode;
        let ul = li.parentNode;
        ul.removeChild(li);
    }
</script>
<?php include 'footer.php'; ?>