<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <title>PHP Motors HomePage | Cory Barton</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="../phpmotors/css/small.css" type="text/css" rel="stylesheet" media="screen">
  <link href="../phpmotors/css/large.css" type="text/css" rel="stylesheet" media="screen">
<body>
    <header>
      <div class="homepage">
            <img src="../phpmotors/images/site/logo.png" alt="page">
      
            <a href="home.php">My Account</a>
      </div>
    </header>
   
    <main>
        <nav>
        <?php echo $navList; ?>
            <!-- <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="classic.php">Classic</a></li>
                <li><a href="sports.php">Sports</a></li>
                <li><a href="suv.php">SUV</a></li>
                <li><a href="truck.php">Truck</a></li>
                <li><a href="used.php">Used</a></li> 
            </ul> -->
        </nav>
            <div class="page-content">
                <h1>Welcome to PHP Motors!</h1>
                    <h2>DMC Delorean</h2>
                    <p>3 Cup holders <br>
                    Superman doors <br>
                    Fuzzy dice! </p>
            </div>
            <div class="button-click">
                <img src="../phpmotors/images/site/own_today.png" alt="button">
            </div>
            <div class="content-pic">
            <img src="../phpmotors/images/delorean.jpg" alt="car">
            </div>
               
            <h3>Delorean Upgrade</h3>   
        <div class="container">
            <div class="box-a">
                <img src="../phpmotors/images/upgrades/flux-cap.png" alt="flux cap">
                <p>Flux Capacitor</p>
            </div>
            <div class="box-b">
                <img src="../phpmotors/images/upgrades/flame.jpg" alt="flame">
                <p>Flame Decals</p>
            </div>   
            
            <div class="box-c">
                <img src="../phpmotors/images/upgrades/bumper_sticker.jpg" alt="bumper stickers">
                <p>Bumper Srickers</p>
            </div>   
            
            <div class="box-d">
                <img src="../phpmotors/images/upgrades/hub-cap.jpg" alt="hub caps">
                <p>Hub Caps</p>
            </div>    
        </div>     
            <div class="box-e">
                <h4>DMC Delorean Review</h4>
                <p>"So fast its just like traveling in time."(4/5)</p>
                <p><strong>.</strong>"Coolest ride on the road."(4/5)</p>
                <p><strong>.</strong>"I am feeling Marty McFly."(5/5)</p>
                <p><strong>.</strong>"So fast its just like traveling in time."(4/5)</p>
                <p><strong>.</strong>"The most futuristic ride of our days."(4.5/5)</p>
                <p><strong>.</strong>"80's livivng and i love it."(5/5)<br>
            </div>
    </main>
    <hr class="line">
    
    <footer>
    &copy; PHP Motors, All rights reserved. <br>
            All images used are believed to be in "Fair Use". Please notify the author if any are not and will be removed.<br>
    </footer>
    
</body>
</html>