<?php

$url = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?limit=20";

// Get the response from the URL
$response = file_get_contents($url);

// Decode the JSON response
$data = json_decode($response, true); // Use 'true' to get an associative array

// Check if the decoding was successful and the "results" key exists
if (!$data || !isset($data["results"])) {
    die('Cannot fetch data');
}

// Print the raw response (if you want to debug the JSON response)
echo "Raw Response: ";
echo $response;

// Print the decoded data (for inspection)
echo "Decoded Data: ";
print_r($data);

// Get the results from the decoded data
$result = $data["results"];

// Optionally, you can now work with the $result array
echo "Results: ";
print_r($result);

?>

<html>
    <head>

</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Year</th>
                <th>Semester</th>
                <th>Programs</th>
                <th>Nationality</th>
                <th>Colleges</th>
                <th>Number of students</th>


            </tr>
</thead>
</table>
</body>
</html>
