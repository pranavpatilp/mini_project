<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
</head>
<body>

<style>
*{
    margin: 0;
    padding: 0;

}
.hai{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%),url("../images/carbg2.jpg");
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%);
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
}
.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width:200px;
    float: left;
    height : 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float:left;
    padding-top: 10px;

}
.menu{
    width: 400px;
    float: left;
    height: 70px;

}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;

}

ul li a{
    text-decoration: none;
    color: black;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

}

.content-table{
   border-collapse: collapse;
    
    font-size: 1em;
    /* min-width: 400px; */
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow:0 0  20px rgba(0,0,0,0.15);
    margin-left : 100px ;
    margin-top: 25px;
    width: 1300px;
    height: 300px;
}
.content-table thead tr{
    background-color: orange;
    color: white;
    text-align: left;
}

.content-table th,
.content-table td{
    padding: 12px 15px;


}

.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;

}
.content-table tbody tr:last-of-type{
    border-bottom: 2px solid orange;
}

.content-table thead .active-row{
    font-weight:  bold;
    color: orange;
}


.header{
    margin-top: -700px;
    margin-left: 650px;
}


.nn{
    width:100px;
    /* background: #ff7200; */
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:white;
    transition: 0.4s ease;

}


.nn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    
}

.but a{
    text-decoration: none;
    color: black;
    
}
</style>
<?php
require_once('connection.php');

// Updated query to join booking table with cars table to get car name
$query = "SELECT b.BOOK_ID, b.CAR_ID, b.EMAIL, b.BOOK_PLACE, b.BOOK_DATE, 
                 b.DURATION_VALUE, b.DURATION_TYPE, c.CAR_NAME, 
                 b.DESTINATION, b.RETURN_DATE, b.BOOK_STATUS
          FROM booking b 
          JOIN cars c ON b.CAR_ID = c.CAR_ID 
          ORDER BY b.BOOK_ID DESC";
$queryy = mysqli_query($con, $query);
?>

<div class="hai">
    <div class="navbar">
        <div class="icon">
            <h2 class="logo">CaRs</h2>
        </div>
        <div class="menu">
            <ul>
                <li><a href="adminvehicle.php">VEHICLE MANAGEMENT</a></li>
                <li><a href="adminusers.php">USERS</a></li>
                <li><a href="admindash.php">FEEDBACKS</a></li>
                <li><a href="adminbook.php">BOOKING REQUEST</a></li>
                <li><button class="nn"><a href="index.php">LOGOUT</a></button></li>
            </ul>
        </div>
    </div>
</div>

<div>
    <h1 class="header">BOOKINGS</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>CAR ID</th>
                <th>EMAIL</th>
                <th>BOOK PLACE</th>
                <th>BOOK DATE</th>
                <th>DURATION</th>
                <th>CAR NAME</th> <!-- Changed from PHONE NUMBER -->
                <th>DESTINATION</th>
                <th>RETURN DATE</th>
                <th>BOOKING STATUS</th>
                <th>APPROVE</th>
                <th>CAR RETURNED</th>
            </tr>
        </thead>
        <tbody>
            <?php while($res = mysqli_fetch_array($queryy)) { ?>
            <tr class="active-row">
                <td><?php echo $res['CAR_ID']; ?></td>
                <td><?php echo $res['EMAIL']; ?></td>
                <td><?php echo $res['BOOK_PLACE']; ?></td>
                <td><?php echo $res['BOOK_DATE']; ?></td>
                <td><?php echo $res['DURATION_VALUE'] . " " . $res['DURATION_TYPE']; ?></td>
                <td><?php echo $res['CAR_NAME']; ?></td> <!-- Updated Field -->
                <td><?php echo $res['DESTINATION']; ?></td>
                <td><?php echo $res['RETURN_DATE']; ?></td>
                <td><?php echo $res['BOOK_STATUS']; ?></td>
                <td><button class="but"><a href="approve.php?id=<?php echo $res['BOOK_ID']; ?>">APPROVE</a></button></td>
                <td><button class="but"><a href="adminreturn.php?id=<?php echo $res['CAR_ID']; ?>&bookid=<?php echo $res['BOOK_ID']; ?>">RETURNED</a></button></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>