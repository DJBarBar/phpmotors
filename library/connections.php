<?php
/* 
* Proxy connections to phpmotors database
*/


function phpmotorsConnect()
{
    $server = 'mysql';
    $dbname = 'phpmotors';
    $username = 'dbuser';
    $password = 'dbpass';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    // Create the actual connection object and assign it to a variable
    try {
        $link = new PDO($dsn, $username, $password, $options);
        return $link;
    } catch (PDOException $e) {
        //echo "It didn't work, error: " . $e->getMessage();
        header('Location: /phpmotors/view/500.php');
        exit;
    }
}
//phpmotorsConnect();