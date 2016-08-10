<?php
//This generates a random user identifier value
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//Note: The setcookie() function must appear BEFORE the <html> tag.
//here we define the cookie name ("user") and then set a value by calling the random string function above
//then we set the cookie
$cookie_name = "user";
$cookie_value = generateRandomString();
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
