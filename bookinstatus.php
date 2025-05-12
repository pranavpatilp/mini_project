<?php
require_once('connection.php');
session_start();
$email = $_SESSION['email'];

// Fetch all bookings
$sql = "SELECT * FROM booking WHERE EMAIL='$email' ORDER BY BOOK_ID DESC";
$result = mysqli_query($con, $sql);

// Fetch user details
$sql2 = "SELECT * FROM users WHERE EMAIL='$email'";
$name2 = mysqli_query($con, $sql2);
$rows2 = mysqli_fetch_assoc($name2);

if(mysqli_num_rows($result) == 0){
    echo '<script>alert("THERE ARE NO BOOKING DETAILS")</script>';
    echo '<script> window.location.href = "cardetails.php";</script>';
    exit(); // Stop further execution
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING STATUS</title>
</head>
<body>
<style>
* {
    margin: 0;
    padding: 0;
}
body {
    background: url("images/carbg2.jpg");
    background-position: center;
}
.box {
    position: center;
    top: 50%;
    left: 50%;
    padding: 20px;
    box-sizing: border-box;
    background: #fff;
    border-radius: 4px;
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
    background: linear-gradient(to top, rgba(255, 251, 251, 1)70%,rgba(250, 246, 246, 1)90%);
    display: flex;
    align-content: center;
    width: 700px;
    height: 250px;
    margin-top: 50px;
    margin-left: auto;
    margin-right: auto;
}
.box .content {
    margin-left: 5px;
    font-size: larger;
}
.utton {
    width: 200px;
    height: 40px;
    background: #ff7200;
    border: none;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
    margin-top: 10px;
    margin-left: 10px;
}
.utton a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}
ul {
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
}
ul li {
    list-style: none;
    margin-left: 200px;
    margin-top: -50px;
    font-size: 35px;
}
.name {
    font-weight: bold;
}
</style>

<ul>
    <li><button class="utton"><a href="cardetails.php">Go to Home</a></button></li>
    <li class="name">HELLO! <?php echo $rows2['FNAME']." ".$rows2['LNAME']?></li>
</ul>

<?php while($rows = mysqli_fetch_assoc($result)) { 
    // Fetch car details for each booking
    $car_id = $rows['CAR_ID'];
    $sql3 = "SELECT * FROM cars WHERE CAR_ID='$car_id'";
    $name3 = mysqli_query($con, $sql3);
    $rows3 = mysqli_fetch_assoc($name3);
?>
<br>
    <div class="box">
        <div class="content">
            <h1>CAR NAME : <?php echo $rows3['CAR_NAME']?></h1><br>
            <h1>NO OF <?php echo strtoupper($rows['DURATION_TYPE']); ?> : <?php echo $rows['DURATION_VALUE']; ?></h1><br>
            <h1>BOOKING STATUS : <?php echo $rows['BOOK_STATUS']?></h1><br>
        </div>
    </div>
<?php } ?>

</body>
</html>
