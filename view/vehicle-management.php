<!doctype html>
<html lang="en">

<head>
    <title>PHP Motors</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/normalize.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/main.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Quantico&display=swap" rel="stylesheet" media="screen">
</head>

<body>
    <header>
        <img src="/phpmotors/images/site/logo.png" alt="PHP Motors Logo">
        <?php if (isset($cookieFirstname)) {
            echo "<span>Welcome, $cookieFirstname</span>";
        } ?>
        <a id="account" href="/phpmotors/accounts/?action=login">My Account</a>
    </header>
    <nav>
        <?php echo $navList; ?>
    </nav>
    <main>
        <section class="paddingleftright">
            <h1>Vehicle Management</h1>
            <ul>
                <li><a class="block" href="/phpmotors/vehicles/?action=addclassification">Add Classification</a></li>
                <li><a class="block" href="/phpmotors/vehicles/?action=addvehicle">Add Vehicle</a></li>
            </ul>
        </section>
    </main>
    <footer>
        <hr>
        <p>&copy; PHP Motors. All rights reserved.
            <br>All images used are believed to be in "Fair Use". Please notify the author if any are not and they will be removed
        </p>
    </footer>
</body>

</html>