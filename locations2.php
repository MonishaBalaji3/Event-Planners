<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Our Venues</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/chellam1.jpg"  height="200" width="300"><br><br>
                            <img src="images/chellam2.jpg" height="200" width="300">
                        </div>
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">VS Chellam Century Hall</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Kamarajar Salai, Madurai
                            </p>
                            <p class="definition"><!--content body-->
                            Amenities:<br>
                                <ul>
                                   <li>Air Conditioned</li>
                                   <li>Parking Available</li>
                                   <li>Indoor</li>
                                   <li>Capacity : 500</li>
                                </ul>    
                            </p>
                            <hr class="customline">
                            <button type="button" class="btn btn-default btn-lg" onclick="window.location.href = 'service.php';">
                            Book Now <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/dwarka1.jpg" height="200" width="300"><br><br>
                            <img src="images/dwarka2.jpg" height="200" width="300">
                            
                        </div>
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Dwarka Palace Marriage Hall</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Vandiyur, Madurai
                            </p>
                            <p class="definition"><!--content body-->
                            Amenities:<br>
                                <ul>
                                   <li>Air Conditioned</li>
                                   <li>Parking Available</li>
                                   <li>Indoor</li>
                                   <li>Capacity : 1500</li>
                                </ul>    
                            </p>
                            <hr class="customline">
                            <button type="button" class="btn btn-default btn-lg" onclick="window.location.href = 'service.php';">
                            Book Now <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/fortune1.jpg" height="200" width="300"><br><br>
                            <img src="images/fortune2.jpg" height="200" width="300">
                            
                        </div>
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Fortune Pandiyan Hotel MTN Hall</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Chinna Chokkikulam, Madurai
                            </p>
                            <p class="definition"><!--content body-->
                            Amenities:<br>
                                <ul>
                                   <li>Air Conditioned</li>
                                   <li>Parking Available</li>
                                   <li>Indoor</li>
                                   <li>Capacity : 100</li>
                                </ul>    
                            </p>
                            <hr class="customline">
                            <button type="button" class="btn btn-default btn-lg" onclick="window.location.href = 'service.php';">
                            Book Now <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/pentagon1.jpg" height="200" width="300"><br><br>
                            <img src="images/pentagon2.jpg" height="200" width="300">
                            
                        </div>
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Pentagon Open Lawn</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Umachikulam, Madurai
                            </p>
                            <p class="definition"><!--content body-->
                            Amenities:<br>
                                <ul>
                                   <li>Not Air Conditioned</li>
                                   <li>Parking Available</li>
                                   <li>Outdoor</li>
                                   <li>Capacity : 200</li>
                                </ul>    
                            </p>
                            <hr class="customline">
                            <button type="button" class="btn btn-default btn-lg" onclick="window.location.href = 'service.php';">
                            Book Now <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            
			
            
            
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
