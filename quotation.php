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

<h1>Thank you for choosing our services<br>Here is a basic quotation for your selected services<br> </h1>



<h3>
<?php

 
$venue_price=0;
$food_price=0;
$decor_price=0;
$fashion_price=0;
$beauty_price=0;
$photo_price=0;

if (isset($_POST['venue']))
{

$venue=$_POST['venues'];

if ($venue=='chellam')
{

$venue_price=100000;

}
else if ($venue=='dwarka')
{

$venue_price=200000;

}

else if ($venue=='fortune')
{

$venue_price=75000;

}

else if ($venue=='pentagon')
{

$venue_price=100000;

}



echo "Venue : $venue_price";
echo "<br/>";
}


if (isset($_POST['food']))
{

$guest=$_POST['guest'];

if (isset($_POST['veg']))
{

$food_price=$guest*200;

}
else if (isset($_POST['nveg']))
{

$food_price=$guest*200;

}

echo "Food Catering : $food_price";
echo "<br/>";
}

if (isset($_POST['decor']))
{



if (isset($_POST['floral']))
{

$decor_price=10000;

}
else if (isset($_POST['theme']))
{

$decor_price=15000;

}

echo "Decoration : $decor_price";
echo "<br/>";
}


if (isset($_POST['fashion']))
{



if (isset($_POST['bride']))
{

$bride_price=75000;

}
else
{
$bride_price=0;
}
if (isset($_POST['groom']))
{

$groom_price=35000;

}
else
{
$groom_price=0;
}

$fashion_price=$bride_price+$groom_price;
echo "Fashion : $fashion_price";
echo "<br/>";
}

if (isset($_POST['beauty']))
{


$beauty_price=25000;

echo "Beauty : $beauty_price";
echo "<br/>";
}


if (isset($_POST['photo']))
{


$photo_price=200000;

echo "Photography : $photo_price";
echo "<br/>";
}

$total_price=$venue_price+$food_price+$decor_price+$fashion_price+$beauty_price+$photo_price;

echo "Total cost for your event would be $total_price";
echo "<br/>";
echo "<br/>";

?>

</h3>
<h1>Fill the form below to confirm your services</h1><br>

<form action="connect.php" method="post">
	

	<label for="fname">First name:</label>
  	<input type="text" id="fname" name="fname" required ><br>

  	<label for="lname">Last name:</label>
  	<input type="text" id="lname" name="lname" required><br>

  	<label for="email">Email Id:</label>
  	<input type="email" id="email" name="email" required ><br>

  	<label for="contact">Contact number:</label>
  	<input type="tel" id="contact" name="contact" required><br>

	<label for="title">Title of the event:</label>
  	<input type="text" id="title" name="title" required><br>

	<label for="des">Description:</label>
  	<input type="text" id="des" name="des" required><br>

	<input type="hidden" id="guest" name="guest" value="<?php echo $guest; ?>">
	<input type="hidden" id="food" name="food" value="<?php echo $food_price; ?>">
    <input type="hidden" id="decor" name="decor" value="<?php echo $decor_price; ?>">
	<input type="hidden" id="fashion" name="fashion" value="<?php echo $fashion_price; ?>">
    <input type="hidden" id="beauty" name="beauty" value="<?php echo $beauty_price; ?>">
	<input type="hidden" id="photo" name="photo" value="<?php echo $photo_price; ?>">
	<input type="hidden" id="venue" name="venue" value="<?php echo $venue_price; ?>">

	<label for="cost">Cost of the event:</label>
  	<input type="number" id="cost" name="cost" value="<?php echo $total_price; ?>" readonly><br>

      
      <label for="sdate">Start Date:</label>
  	<input type="date" id="sdate" name="sdate" required><br>
      <label for="edate">End Date:</label>
  	<input type="date" id="edate" name="edate" required><br><br>
	
	<button type="submit" >Confirm</button>

</form>



    </div>
 </div>


<?php require 'utils/footer.php'; ?>
</body>
</html>