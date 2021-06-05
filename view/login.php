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
        <section>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form action="/phpmotors/accounts/" method="post">
                <h1>Sign In</h1>
                <div>
                    <label for="clientEmail">Email</label>
                    <input type="email" name="clientEmail" id="clientEmail" placeholder="Your Email" autofocus autocomplete="off" <?php if (isset($clientEmail)) {
                                                                                                                                        echo "value='$clientEmail'";
                                                                                                                                    } ?> required>
                </div>
                <div>
                    <label for="clientPassword">Password</label>
                    <input type="password" name="clientPassword" id="clientPassword" placeholder="Your Password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="off" required>
                    <span>*Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
                </div>
                <div>
                    <input type="submit" name="Submit" value="Login">
                    <input type="hidden" name="action" value="Login">
                </div>
            </form>
            <a id='notamember' href="/phpmotors/accounts/?action=newmember">Not a member yet?</a>
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