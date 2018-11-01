<?php

/**
 * Dump a variable as a JSON
 * 
 * @param mixed $var
 * 
 * @return Array
 */
function dd($var)
{
    header("Content-Type: application/json");

    echo json_encode($var);
    die();
}

/**
 * Abort a request, and return a specific response page
 * 
 * @param String $code
 * 
 * @return Response
 */
function abort($code) {
    $statuses = ["404", "425"];

    if (in_array($code, $statuses)) {
        redirectTo($code);
    } else {
        throw new ErrorException("Invalid code given");
    }
}

/**
 * Redirect to specific URI
 * 
 * @param String $uri
 * 
 * @return Response
 */
function redirectTo($uri)
{
    header("location: {$uri}");

    die();
}