<?php

// This is URL to retrieve the data from the API
$url = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

// Retrieve the response from the API
$response = file_get_contents($url);

// Decode the JSON response into an array
$data = json_decode($response, true);

// Check if the data is valid and contains the "results" key
if (!$data || !isset($data["results"])) {
  die("Cannot get the results from the required API"); // Exit if the data is invalid
}

// Store the result 
$outcome = $data["results"];

?>