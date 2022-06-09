<?php
require('connection.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
$city= strtolower($_POST["city"]);
$email = $_POST["email"];
$number = $_POST["number"];
$url = $_POST["url"];
$bdaymin= $_POST["birthdaymin"];
$bdaymax = $_POST["birthdaymax"];
$weddingmin= $_POST["weddingmin"];
$weddingmax = $_POST["weddingmax"];
$concertmin= $_POST["concertmin"];
$concertmax = $_POST["concertmax"];
$about= $_POST["about"];

        
      
        
// $sql = "INSERT INTO students (name, city, email, number, url, birthdaymin, birthdaymax, weddingmin, weddingmax, concertmin, concertmax, about)
//         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?)";

$sql = "INSERT INTO `students`(`name`, `email`, `number`, `url`, `city`, `bdaymin`, `bdaymax`, `weddingmin`, `weddingmax`, `concertmin`, `concertmax`, `about`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssissiiiiiis",
                       $name,
                       $email,
                       $number,
                       $url,
                       $city,
                       $bdaymin,
                       $bdaymax,
                       $weddingmin,
                       $weddingmax,
                       $concertmin,
                       $concertmax,
                       $about);

mysqli_stmt_execute($stmt);

//echo "Record saved.";
echo "<script>alert('Record saved.');window.location.assign('index.php')</script>";

}

?>

