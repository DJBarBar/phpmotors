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
        <?php // include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/nav.php'; 
        ?>
        <?php echo $navList; ?>
    </nav>
    <main>
        <section class="paddingleftright">
            <h1>Add Car Classification</h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form action="/phpmotors/vehicles/" method="post">
                <label for="classificationName">Classification Name</label>
                <input type="text" name="classificationName" id="classificationName" placeholder="Enter Name Here" autofocus autocomplete="off" required>
                <input type="submit" name="Submit" value="Add Classification">
                <input type="hidden" name="action" value="addClassification">
            </form>
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