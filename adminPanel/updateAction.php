<?php
include 'config.php';
$uploadedPaths=array();
if (isset($_POST['updateProperty'])) {
    // Extracting form data
    $id = $_POST['id']; // Assuming you have a hidden input for the property ID
    $title = $_POST['title'];
    $category = $_POST['category'];
    $beds = $_POST['beds'];
    $baths = $_POST['baths'];
    $area = $_POST['area'];
    $listedDate = $_POST['listedDate'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $areap = $_POST['state_id'];
    $map = $_POST['map'];
    $description = $_POST['description'];
    $video_name = $_POST['video'];
    $amenities = $_POST['amenities'];


    // Handle uploaded images
    $featureImgFile = $_FILES['featureImg']['name'];
    $featureImgTmpName = $_FILES['featureImg']['tmp_name'];
    $folder = "uploads/" . $featureImgFile;
    move_uploaded_file($featureImgTmpName, $folder);

    $uploadedPaths = array();

    if (!empty($_FILES['images']['name'])) {
        $imagesFile = $_FILES['images']['name'];
        $imagesTmpName = $_FILES['images']['tmp_name'];

        for ($i = 0; $i < count($imagesFile); $i++) {
            $fileName = $imagesFile[$i];
            $tmpName = $imagesTmpName[$i];
            $folder = "uploads/" . $fileName;
            move_uploaded_file($tmpName, $folder);
            $uploadedPaths[] = $folder;
        }
    }

    $uploadedPaths = implode(",", $uploadedPaths);
  

    // Update the SQL query using prepared statement
    $sql = "UPDATE `property` SET
                `title`='$title', `category`=$category, `beds`=$beds, 
                `baths`=$baths, `area`=$area, `price`=$price, `secuirityDeposit`=$securityDeposit, 
                `listedDate`=$listedDate, `zipcode`=$zipcode, `city`=$city, `address`=$address, 
                `country`=$country, `state_id`=$areap `map`=$map, `video`=$video, 
                `featureImg`=$featureImgFile, `images`=$uploadedPaths, `description`=$description, 
                `amenities`=$uploadedAmenity
            WHERE `id`= $id";

            // mysqli_query($conn, $sql);

            header('location: add_property.php');
}

?>