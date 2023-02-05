<?php

function successResponse($message, $data = [])
{
    $response = [
        "error" => false,
        "message" => $message,
        "data" => $data
    ];
    return response($response, 200);
}

function notFoundResponse($message)
{
    $response = [
        "error" => false,
        "message" => $message,
        "data" => []
    ];
    return response($response, 404);
}

function errorResponse($message)
{
    $response = [
        "error" => true,
        "message" => $message,
        "data" => []
    ];
    return response($response, 500);
}


function unauthorizeResponse($message)
{
    $response = [
        "error" => true,
        "message" => $message,
        "data" => []
    ];
    return response($response, 401);
}
function notImplementedResponse($message)
{
    $response = [
        "error" => true,
        "message" => $message,
        "data" => []
    ];
    return response($response, 501);
}
function badResponse($message)
{
    $response = [
        "error" => true,
        "message" => $message,
        "data" => []
    ];
    return response($response, 400);
}
