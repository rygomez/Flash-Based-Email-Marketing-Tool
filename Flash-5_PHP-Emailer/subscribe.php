<?
/*******************************************************
Created: 2002-01-17
By: Ryan Gomez
ryangomez@gmail.com
Use as you like.
*******************************************************/

// Enter your contact email address here
$adminaddress = "ryangomez@gmail.com";

// Enter the address of your website here include http://www.
$siteaddress ="http://www.kreativesource.com";

// Enter your company name or site name here
$sitename = "Your Site Name";



// Gets the date and time from your server
$date = date("m/d/Y H:i:s");

// Gets the IP Address
if ($REMOTE_ADDR == "") $ip = "no ip";
else $ip = getHostByAddr($REMOTE_ADDR);

//Process the form data!
// and send the information collected in the Flash form to Your nominated email address
if ($action != ""):
mail("$adminaddress","New Subscription",
"A visitor at $sitename subscribed to your mailing list.\n
Name: $name
email: $email

Logged Info :
------------------------------
Using: $HTTP_USER_AGENT
Hostname: $ip
IP address: $REMOTE_ADDR
Date/Time:  $date","FROM:$adminaddress");

//This sends a confirmation email to your visitor
//Subject Here
mail("$email","Thank You for visiting $sitename",

//Body of the Email here
"Hi $name,\n
Thanks for your email you will now recieve updates from $sitename!\n
Cheers,
$sitename
$siteaddress","FROM:$adminaddress");

//Confirmation is sent back to the Flash form that the process is complete
$sendresult = "Thank you for applying. You will receive a confirmation email shortly.";
$send_answer = "answer=";
$send_answer .= rawurlencode($sendresult);
echo "$send_answer";

endif;
//Thats about it I hope it is useful 
?>