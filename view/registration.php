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
        <img src="../images/site/logo.png" alt="PHP Motors Logo">
        <a id="account" href="/phpmotors/accounts/?action=deliverLoginView">My Account</a>
    </header>
    <nav>

        <?php echo $navList; ?>
    </nav>
    <main>
        <section>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form action="/phpmotors/accounts/index.php" method="post">
                <h1>Register</h1>
                <div>
                    <label for="clientFirstname">First Name</label>
                    <input type="text" name="clientFirstname" id="clientFirstname" placeholder="Your First Name" autofocus autocomplete="off">
                </div>
                <div>
                    <label for="clientLastname">Last Name</label>
                    <input type="text" name="clientLastname" id="clientLastname" placeholder="Your Last Name" autocomplete="off">
                </div>
                <div>
                    <label for="clientEmail">Email</label>
                    <input type="email" name="clientEmail" id="clientEmail" placeholder="Your Email" autocomplete="off">
                </div>
                <div>
                    <label for="clientPassword">Password</label>
                    <input type="password" name="clientPassword" id="clientPassword" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="off">
                    <p><strong>Password must contain at least 1 number, 1 uppercase, 1 lowercase letter, and at least 8 or more characters</strong></p>
                </div>
                <div>
                    <input type="submit" name="submit" id="regbtn" value="Register">
                    <input type="hidden" name="action" value="register">
                </div>
            </form>
        </section>
    </main>
    <footer>
        <hr>
        <p>&copy; PHP Motors. All rights reserved.
            <br>All images used are believed to be in "Fair Use". Please notify the author if any are not and they will be removed
            <br>Last Updated: 15 May, 2021
    </footer>
</body>

</html>