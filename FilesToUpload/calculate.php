<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Love Calculator</title>
</head>
<body bgcolor = "red">

<!--
Code by - Baibhav Anand Jha
Github - https://github.com/baibhavanand
Project - https://baibhavanand.github.io/lovecalc
Twitter - https://twitter.com/spongebhav
 -->

<h1 align= "center">
<?php

$name = $_POST["name"];
$partname = $_POST["partname"];
$result = rand(1, 100);

echo ("Your partner loves you " . $result . "%");

if ($result > 75)
{
    echo "<br><br><br><br>You are lucky your partner loves you so much.";
}
elseif ($result < 75 && $result > 50)
{
    echo "<br><br><br><br>Your partner loves you but not as much as you think they do.";
}
else
{
    echo "<br><br><br><br>I am sorry to say this but it doesn't seem like your partner loves you as much as you expect them to.";
}

if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
    $ip = $_SERVER['REMOTE_ADDR'];
}

$useragent = $_SERVER['HTTP_USER_AGENT'];

//Replace "your-email-here" with your email.

mail("your-email-here", "Someone Used LoveCalc", "Via LoveCalc\n\nYour Name: $name \nYour Partner Name: $Partner \n\n\nIP: $ip \n\nUser Agent: $useragent \n\n\n\nIf you run into any issues, feel free to create an issue here: https://github.com/baibhavanand/lovecalc");

?>
</h1>
</body>
</html>
