<?php 

include 'config.php';
use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'PHPMailer/Exception.php';
 require 'PHPMailer/PHPMailer.php';
 require 'PHPMailer/SMTP.php';

if (isset($_POST['addRentalApplication'])) {

$location = $_POST['location'];
$beginning = $_POST['beginning'];
$price = $_POST['price'];
$Fname = $_POST['Fname'];
$DOB = $_POST['DOB'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$socialNo = $_POST['socialNo'];
$drivingLicense = $_POST['drivingLicense'];
$currentAddress = $_POST['currentAddress'];
$city = $_POST['city'];
$landlordName = $_POST['landlordName'];
$ReasonOfMoving = $_POST['ReasonOfMoving'];
$currentRent = $_POST['currentRent'];
$DateMovedIn = $_POST['DateMovedIn'];
$PreviousAddress = $_POST['PreviousAddress'];
$PreviousZipcode = $_POST['PreviousZipcode'];
$type = $_POST['type'];
$PresentOccupation = $_POST['PresentOccupation'];
$EmployeeName = $_POST['EmployeeName'];
$positionSalary = $_POST['positionSalary'];
$employeeInfo = $_POST['employeeInfo'];
$dateEmployeFrom = $_POST['dateEmployeFrom'];
$OtherSrceOfIncome = $_POST['OtherSrceOfIncome'];
$VehicleInfo = $_POST['VehicleInfo'];
$LicenseNo = $_POST['LicenseNo'];
$monthly = $_POST['monthly'];
$otherVehicle = $_POST['otherVehicle'];
$HowknowRental = $_POST['HowknowRental'];
$occupyingUnit = $_POST['occupyingUnit'];
$suedForRent = $_POST['suedForRent'];
$evictedFromRent = $_POST['evictedFromRent'];
$suedForDamage = $_POST['suedForDamage'];
$brokeRentAgreement = $_POST['brokeRentAgreement'];
$bankruptcy = $_POST['bankruptcy'];

$description = $_POST['description'];
$notify = $_POST['notify'];

$pets = $_POST['pets'];

$sql = "INSERT INTO `rentapplication` (`location`, `beginning`, `price`, `Fname`, `DOB`, `phone`, `email`, `socialNo`, `drivingLicense`, `currentAddress`, `city`, `landlordName`, `ReasonOfMoving`, `currentRent`, `DateMovedIn`, `PreviousAddress`, `PreviousZipcode`, `type`, `PresentOccupation`, `EmployeeName`, `positionSalary`, `employeeInfo`, `dateEmployeFrom`, `OtherSrceOfIncome`, `VehicleInfo`, `LicenseNo`, `monthly`, `otherVehicle`, `HowknowRental`, `occupyingUnit`, `suedForRent`, `evictedFromRent`, `suedForDamage`, `brokeRentAgreement`, `bankruptcy`, `pets`, `description`, `notify`)
VALUES ('$location', '$beginning', '$price', '$Fname', '$DOB', '$phone', '$email', '$socialNo', '$drivingLicense', '$currentAddress', '$city', '$landlordName', '$ReasonOfMoving', '$currentRent', '$DateMovedIn', '$PreviousAddress', '$PreviousZipcode', '$type', '$PresentOccupation', '$EmployeeName', '$positionSalary', '$employeeInfo', '$dateEmployeFrom', '$OtherSrceOfIncome', '$VehicleInfo', '$LicenseNo', '$monthly', '$otherVehicle', '$HowknowRental', '$occupyingUnit', '$suedForRent', '$evictedFromRent', '$suedForDamage', '$brokeRentAgreement', '$bankruptcy', '$pets', '$description', '$notify')";
 mysqli_query($conn, $sql);
 header("location: index.php");

}



if (isset($_POST['addMaintenance'])) {

$address = $_POST['Address'];
$city = $_POST['city'];
$name = $_POST['name'];
$subject = "Maintenance Request";
$email = $_POST['email'];
$phone = $_POST['phone'];
$enterPermission = $_POST['enterPermission'];
$pets= $_POST['pets'];
$haveAlarm = $_POST['haveAlarm'];
$alarmCode = $_POST['alarmCode'];
$description = $_POST['description'];
$requiredAttention = $_POST['RequiredAttention'];
$haveLock = $_POST['haveLock'];
$lockCode = $_POST['lockCode'];

$imagesFile = $_FILES['images']['name'];
$imagesTmpName = $_FILES['images']['tmp_name'];
$uploadedPaths = array();
// Loop through each uploaded file
for ($i = 0; $i < count($imagesFile); $i++) {
    // Get the file name and temporary name
    $fileName = $imagesFile[$i];
    $tmpName = $imagesTmpName[$i];

    // Generate a unique name for the file to avoid overwriting
    $uniqueName = uniqid() . '_' . $fileName;

    // Move the uploaded file to the desired folder with the unique name
    $folder = "uploads/" . $uniqueName;
    move_uploaded_file($tmpName, $folder);

    // Add the uploaded image path to the array
    $uploadedPaths[] = $uniqueName;
}

$uploadedPaths = implode(",", $uploadedPaths);




// Recipient's email address
$to = "alviu027@gmail.com";

// PHPMailer setup
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Your SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'alviu027@gmail.com'; // Your SMTP username
    $mail->Password   = 'bric qepf rcxu uxrm'; // Your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Recipient and sender details
    $mail->setFrom($email, $name);
    $mail->addAddress($to);
    
    // Content
    $mail->isHTML(true);  // Set to true if sending HTML content
    $mail->Subject = $subject;
    $mail->Body    = "Property Address: $address <br> City: $city <br> name: $name <br> email: $email <br> phone: $phone <br> enter permission: $enterPermission <br> Do you have any pets?: $pets <br> Do you have Alarm?: $haveAlarm <br> Alarm code : $alarmCode <br> Do you have a lock Box? : $haveLock <br> Lock Code : $lockCode <br> Issue Description: $description";

    // Send the email
    $mail->send();
    
    // You can customize the response message
    session_start();
    $_SESSION['sent'] = true;
} catch (Exception $e) {
    // Handle errors
    echo 'error';
}
$sql = "INSERT INTO `maintenanceapplication` (`Address`, `city`, `name`, `email`, `phone`, `enterPermission`, `haveAlram`, `alarmCode`, `description`, `RequiredAttention`, `pets`, `haveLock`, `lockCode`, `images`)
                         VALUES ('$address', '$city', '$name', '$email', '$phone', '$enterPermission', '$haveAlarm', '$alarmCode', '$description', '$requiredAttention', '$pets', '$haveLock', '$lockCode', '$uploadedPaths')";
mysqli_query($conn, $sql);
header("location: index.php");
}



if (isset($_POST['addEnquiry'])) {
        $enquiry_id = $_POST['enquiry_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `enquiry` (`enquiry_id`, `name`, `email`, `phone`, `description`) VALUES ('$enquiry_id', '$name', '$email', '$phone', '$description')";
        mysqli_query($conn, $sql);
        header("location: index.php");

}

if (isset($_POST['agentResume'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $DOB = $_POST['DOB'];
        $previousJob = $_POST['previousJob'];
        $featureFile = $_FILES['cv']['name'];
        $featureTmpName = $_FILES['cv']['tmp_name'];
        $folder = "uploads/resume/" . $featureFile;
        move_uploaded_file($featureTmpName, $folder);
       

        $sql = "INSERT INTO `agent` (`fname`, `lname`, `email`, `phone`, `DOB`, `previousJob`, `cv`) VALUES ('$fname', '$lname', '$email', '$phone', '$DOB', '$previousJob', '$featureFile')";
        mysqli_query($conn, $sql);

        header("location: index.php");



}


?>