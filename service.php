<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Our Services</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
<?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
 <div class = "content">
            <div class = "container">
                <div class = "col-md-12">
                    <h1>Our Services</h1>
                </div>
            </div>
<div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
<div class="container">
            <div class="col-md-12">


<form align="justify" action="quotation.php" method="post">

<h1>Venue:</h1>
<input type="checkbox" id="venue" name="venue" value="venue">
  <label for="venues">Kindly check the box if you want our Venue services</label><br>
  <p>Choose from the options given below</p>
  <select name="venues">
    <option value="">Select any venue</option>
    <option value="chellam">VS Chellam Century Hall</option>
    <option value="dwarka">Dwarka Palace Marriage Hall</option>
    <option value="fortune">Fortune Pandiyan Hotel MTN Hall</option>
    <option value="pentagon">Pentagon Open Lawn</option>
  </select>
  



<h1>Food Catering:</h1>
<input type="checkbox" id="food" name="food" value="food">
  <label for="food">Kindly check the box if you want our Food Catering services</label><br>
<p>Choose from the options given below</p>
<input type="radio" id="veg" name="veg" value="veg">
 <label for="veg">Vegetarian</label><br>
 <input type="radio" id="nveg" name="nveg" value="nveg">
 <label for="nveg">Non Vegetarian</label><br>
<label for="guest">Number of Guests:</label>
  <input type="number" id="guest" name="guest" ><br><br>



<h1>Decoration:</h1>

<input type="checkbox" id="decor" name="decor" value="decor">
  <label for="decor">Kindly check the box if you want our Decoration services</label><br>
<p>Choose from the options given below</p>
<input type="radio" id="floral" name="floral" value="floral">
 <label for="floral">Floral Decoration</label><br>
 <input type="radio" id="theme" name="theme" value="theme">
 <label for="theme">Themed Decoration</label><br><br>

<h1>Fashion:</h1>

<input type="checkbox" id="fashion" name="fashion" value="fashion">
  <label for="fashion">Kindly check the box if you want our Fashion services</label><br>
<p>Choose from the options given below</p>
<input type="checkbox" id="bride" name="bride" value="bride">
 <label for="bride">Bride</label><br>
 <input type="checkbox" id="groom" name="groom" value="groom">
 <label for="groom">Groom</label><br><br>

<h1>Beauty and Makeup:</h1>

<input type="checkbox" id="beauty" name="beauty" value="beauty">
  <label for="beauty">Kindly check the box if you want our Beautician and Makeup artist services</label><br><br>

<h1>Photography:</h1>

<input type="checkbox" id="photo" name="photo" value="photo">
  <label for="photo">Kindly check the box if you want our Photography services</label><br><br>






  <input type="submit" value="Submit"  >
</form> 
 </div>
 </div>

</div>


<?php require 'utils/footer.php'; ?>
</body>
</html>