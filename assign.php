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
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Link to Pico CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

  <title>UOB Student Nationality</title> <!-- Title of the webpage -->
</head>

<body>
  <!-- Start of the table to display the student data -->
  <table>
    <thead>
      <!-- Table headers for each column -->
      <tr>
        <th>Year</th>
        <th>Semester</th>
        <th>The Programs</th>
        <th>Nationality</th>
        <th>Colleges</th>
        <th>Number of students</th>
      </tr>
    </thead>

    <tbody>

    <!--put the php here-->




    </tbody>
  </table>
</body>

</html>