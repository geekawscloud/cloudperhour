<?php
//copyright 2015 - A Cloud Guru.

//connection string
include 'connecttoaws.php';

// Create a unique bucket name
$bucket = uniqid("cloudperhour", true);

// Create our bucket using our unique bucket name
$result = $client->createBucket(array(
    'Bucket' => $bucket
));

//HTML to Create our webpage
echo "<h1 align=\"center\">Hello Cloud Experts!</h1>";
echo "<div align= \"center\"><img src='https://s3.amazonaws.com/cloudperhour/cloudperhour.jpg'/></div$
echo "<h2 align=\"center\">You have successfully created a bucket called {$bucket}</h2>";
echo "<div align=\"center\"><a href=\"createfile.php?bucket=$bucket\">Click Here to Continue</a></div$
?>
