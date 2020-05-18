<?php 

define('URL_SITIO', 'http://localhost/mtywebcamp');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AaZ1d3qmbY1ZS08_Rg8H2zjPiLO8yb6qjYip1umjTi9jDzlJOaPRYt6xCIrNXgoSAh-ylQ20PfS5WkWz',     // ClientID
        'EJCRlfnb5FeftWx1FvUFtRTFOpfTPvxZfgOj83wkFQLGBxENHZA0dABxPp3Q43s31X6K67kdTv6ROk0B'      // ClientSecret
    )
);
?>