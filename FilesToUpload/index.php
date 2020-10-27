<!--
Code by - Baibhav Anand Jha
Github - https://github.com/baibhavanand
Project - https://baibhavanand.github.io/lovecalc
Twitter - https://twitter.com/spongebhav
 -->

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Love Calculator</title>
      <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet" />
      <link href="lovecalc.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <div class="section">
         <h1><span>How much does your partner love you?</span></h1>
         <br>
         <div align = "center">
            <svg height="50" width="00"> </svg>
            <img alt="" src="lovecalc.svg" style="width: 100px; height: 100px;" align="center" />
         </div>
         <br>
         <form action="" method="POST"><input name="name" placeholder="Enter Your name" required="" type="text" /><br />
            <input name="partname" placeholder="Enter Your partner name" required="" type="text" /><br />
            <input class="submit" type="submit" value="Calculate" />
         </form>
</h1>
<h3><span><?php

$name = $_POST["name"];
$partname = $_POST["partname"];
$result = rand(1, 100);
$namelower= strtolower($name);
$partnamelower= strtolower($partname);

//Replace "your-name-here" with your name. 
$myname="your-name-here";

$names = file_get_contents("names.txt");
$names = explode("\n", $names);
if(in_array($partnamelower, $names) or in_array($namelower, $names)){
    $isname="true";
} else{
    $isname="false";
}

if ($name==""){
    $is_blank="true";
}
else{
if($namelower==$myname && $isname=="true"){
    echo "Your Partner loves you 100%<br><br>OMG! 100%. You're lucky to have a partner that loves you so much.";
}
elseif($partnamelower==$myname && $isname=="true"){
    echo "Your Partner loves you 100%<br><br>OMG! 100%. You're lucky to have a partner that loves you so much.";
}
else{
echo ("Your partner loves you " . $result . "%");
if ($result > 75)
{
    echo "<br><br>You are lucky your partner loves you so much.";
}
elseif ($result < 75 && $result > 50)
{
    echo "<br><br>Your partner loves you but not as much as you think they do.";
}
else
{
    echo "<br><br>I am sorry to say this but it doesn't seem like your partner loves you as much as you expect them to.";
}
}
if ($is_blank != "true"){
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

mail("Your-email-here", "Someone Used LoveCalc", "Via LoveCalc\n\nYour Name: $name \nYour Partner Name: $partname \n\n\nIP: $ip \n\nUser Agent: $useragent \n\n\n\nIf you run into any issues, feel free to create an issue here: https://github.com/baibhavanand/lovecalc");
}
}
?></span></h3>
</body>
</html>
