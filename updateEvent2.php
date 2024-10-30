<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body align="center">
        <?php require 'utils/header.php'; ?>
    <h1>
     <?php

     


    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "year2project";

    $id=$_POST['eventid'];
    $photo = $_POST['photo'];
    $food = $_POST['food'];
    $decor = $_POST['decor'];
    $fashion = $_POST['fashion'];
    $beauty = $_POST['beauty'];
    $guest= $_POST['guest'];
    $venue= $_POST['venue'];


    $food=intval($guest)*200;

     $conn = new mysqli($servername, $username, $password, $database);

     $total=intval($food)+intval($decor)+intval($fashion)+intval($beauty)+intval($photo)+intval($venue);
     
     $stmt = $conn->prepare("UPDATE events SET Venue = $venue WHERE EventID = $id");
     $stmt->execute();

    $stmt = $conn->prepare("UPDATE events SET No_of_guests = $guest WHERE EventID = $id");
    $stmt->execute();

    $stmt = $conn->prepare("UPDATE events SET Food = $food WHERE EventID=$id");
    $stmt->execute();

    $stmt = $conn->prepare("UPDATE events SET Decoration = $decor WHERE EventID=$id");
    $stmt->execute();

    $stmt = $conn->prepare("UPDATE events SET Fashion = $fashion WHERE EventID=$id");
    $stmt->execute();

    $stmt = $conn->prepare("UPDATE events SET Beauty = $beauty WHERE EventID=$id");
    $stmt->execute();

    $stmt = $conn->prepare("UPDATE events SET Photography = $photo WHERE EventID=$id");
    $stmt->execute();

    $stmt = $conn->prepare("UPDATE events SET Cost = $total WHERE EventID=$id");
    $stmt->execute();


    echo "Your updated total cost of the event would be $total";
     
     ?>  
     <br><p>For more details and changes <a href="contact.php">Click here</a></p>
    </h1> 
        <div class = "container">
                <div class = "col-md-12">

 
        
        </div>
 
    </div>
        <?php require 'utils/footer.php'; ?>   
    </body>
</html>