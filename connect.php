<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Quotation</title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
<body>
<?php require 'utils/header.php'; ?>
<div class = "container">
                <div class = "col-md-12">
<h1>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "year2project";

$conn = new mysqli($servername, $username, $password, $database);



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$title = $_POST['title'];
$des = $_POST['des'];
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];
$cost = $_POST['cost'];
$photo = $_POST['photo'];
$food = $_POST['food'];
$decor = $_POST['decor'];
$fashion = $_POST['fashion'];
$beauty = $_POST['beauty'];
$guest= $_POST['guest'];
$venue= $_POST['venue'];




$sql = "INSERT INTO service(First_Name,Last_Name,Email_id,Contact,Confirmation) VALUES ('$fname','$lname', '$email','$contact','yes')";

$conn->query($sql);

$sql = "INSERT INTO events(Title,Description,StartDate,EndDate,Cost,No_of_guests,Food,Decoration,Fashion,Beauty,Photography,Venue) VALUES ('$title','$des', '$sdate','$edate','$cost','$guest','$food','$decor','$fashion','$beauty','$photo','$venue')";
$conn->query($sql);







?>

<p>Booking Confirmed</p><br>
<p>For more details and changes <a href="contact.php">Click here</a></p>


</h1>


    </div>
 </div>


<?php require 'utils/footer.php'; ?>
</body>
</html>