<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>

     <?php

     $id=$_POST['eventid'];
     

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "year2project";

     $conn = new mysqli($servername, $username, $password, $database);
     $query = "SELECT * FROM events WHERE EventID =$id";
     $result = mysqli_query($conn, $query);
     
    
     $data = mysqli_fetch_assoc($result);

     ?>   
        <div class = "container">
                <div class = "col-md-12">
    <form action="updateEvent2.php" method="post" align="center">
        <label for="venue">Venue:</label>
        <input type="number" id="venue" name="venue" value="<?php echo $data['Venue']; ?>"><br>
        <label for="guest">No_of_guests:</label>
        <input type="number" id="guest" name="guest" value="<?php echo $data['No_of_guests']; ?>"><br>
        <label for="food">Food Catering:</label>
	    <input type="number" id="food" name="food" value="<?php echo $data['Food']; ?>"><br>
        <label for="decor">Decoration:</label>
        <input type="number" id="decor" name="decor" value="<?php echo $data['Decoration']; ?>"><br>
        <label for="fashion">Fashion:</label>
	    <input type="number" id="fashion" name="fashion" value="<?php echo $data['Fashion']; ?>"><br>
        <label for="beauty">Beauty:</label>
        <input type="number" id="beauty" name="beauty" value="<?php echo $data['Beauty']; ?>"><br>
        <label for="photo">Photography:</label>
	    <input type="number" id="photo" name="photo" value="<?php echo $data['Photography']; ?>"><br><br>
        <input type="hidden" id="eventid" name="eventid" value="<?php echo $id; ?>">
        <button type="submit" >Change</button><br>
    </form>  
        </div>
 
    </div>
        <?php require 'utils/footer.php'; ?>   

    
  
  
    </body>
</html>