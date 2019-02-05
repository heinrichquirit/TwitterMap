<?php
    
    require "twitteroauth/autoload.php";
    use Abraham\TwitterOAuth\TwitterOAuth;
    
    define("CONSUMER_KEY", "vLb5oBnTx2O0TU1BD0JXKqtD8");
    define("CONSUMER_SECRET", "EFXkA4KITqgu3qazwFGjxnakblveIEGSbJKC3kCLW4qefCVj3e");

    $access_token = "986527703456145408-J4uGzeAcC6PXpFnBqhm7GfqLEDtc3Ad";
    $access_token_secret = "cwmhC9BmOzUmgI1hhOWh9V251KX7ptphUMpDA1ZYtidB6";
    

    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
    $content = $connection->get("account/verify_credentials");

    print_r($content);

?>