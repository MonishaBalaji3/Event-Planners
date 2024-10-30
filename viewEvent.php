<?php
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Connection.php';


if (!isset($_GET['id'])) {
    die("Illegal request");
}
$id = $_GET['id'];

$connection = Connection::getInstance();
$gateway = new EventTableGateway($connection);

$statement = $gateway->getEventsById($id);

$row = $statement->fetch(PDO::FETCH_ASSOC);
if (!$row) {
    die("Illegal request");
}
?>
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
        <div class = "content">
            <div class = "container">
                <?php 
                if (isset($message)) {
                    echo '<p>'.$message.'</p>';
                }
                ?>
                <table class = "table table-hover">
                    <thead><!--table labels-->
                        <tr>
                            <th>Event ID</th>
                            <th>Venue</th>
                            <th>No of Guests</th>
                            <th>Food Catering</th>                    
                            <th>Decoration</th>
                            <th>Fashion</th>
                            <th>Beauty</th>
                            <th>Photography</th>
                            
                        </tr>
                    </thead>
                    <tbody><!--table contents, pulled from database-->
                        <?php
                        echo '<tr>';
                        echo '<td>' . $row['EventID'] . '</td>';
                        echo '<td>' . $row['Venue'] . '</td>';
                        echo '<td>' . $row['No_of_guests'] . '</td>';
                        echo '<td>' . $row['Food'] . '</td>';                   
                        echo '<td>' . $row['Decoration'] . '</td>';
                        echo '<td>' . $row['Fashion'] . '</td>';
                        echo '<td>' . $row['Beauty'] . '</td>';
                        echo '<td>' . $row['Photography'] . '</td>';
                        
                               
                        echo '</tr>';  
                        ?>
                    </tbody>
                </table>

                <form action="updateEvent1.php" method="post" align="center">
                <input type="hidden" id="eventid" name="eventid" value="<?php echo $row['EventID']; ?>">
                    <button type="submit" >Change</button>
                </form><br>

                <a class="btn btn-default" href="viewEvents.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
                
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
