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
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
    </header>
    <nav>
        <?php // include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/nav.php'; 
        ?>
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
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
    </footer>
</body>

</html>