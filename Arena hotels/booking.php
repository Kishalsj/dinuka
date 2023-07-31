<?php



$conn = mysqli_connect('localhost','root',' ','test');

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Date = $_POST['Date'];
$Message = $_POST['Message'];
$Number = $_POST['Number'];

$sql = "INSERT INTO roombooking (id,Name,Email,Date,Message,Number) VALUES ('$id','$Name', '$Email','$Date','$Message','$Number')";

mysqli_query($conn,$sql);


// $stmt = $conn->prepare("insert into roombooking(Name, Email, Date ,Message ,Number)values(?,?,?,?,?)");

echo $Name;


// $stmt->bind_param("ssisi",$Name, $Email, $Date, $Message, $Number);
// $stmt->execute();
// echo "Room is booked Successfully.....!";
// $stmt->close();
 $conn->close();








?>