<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$response = [
    "email" =>"harveyelvis24@gmail.com",
    "current_date_Time" => gmdate("Y-m-d\TH:i:s\Z"),
    "github_repo" => "https://github.com/GUYAHAVI/HNG12-Backend-projects.git"
];

echo json_encode($response);