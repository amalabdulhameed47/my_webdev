<?php // AMAL ABDULHAMEED - 202204700 - SECTION 3

//url of the API
$url = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?limit=20";

$response = file_get_contents($url); //we get the response from the url

$data = json_decode($response, true); //we decode the data and put it in an associative array

if ( !$data || !isset($data["results"]) ) { //we check whether the result actually exists or not
    die('Error! Cannot fetch data!');
}

$result = $data["results"]; //we put the decoded data into the $result array

?>

<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"> <!--picocss stylesheet link-->
</head>
<body>
    <div class="overflow-auto">
    <table> <!--we display the information we got above in an HTML table with picocss styling-->
        <thead>
            <tr>
                <th scope="col">Year</th>
                <th scope="col">Semester</th>
                <th scope="col">Programs</th>
                <th scope="col">Nationality</th>
                <th scope="col">Colleges</th>
                <th scope="col">Number of students</th>
            </tr>
</thead>
<tbody>
    <?php
    foreach($result as $student) { //foreach loop to echo/print the information
        ?>
        <tr>
        <td scope="row"> <?php echo $student['year']; ?>   </td>
        <td scope="row"> <?php echo $student['semester']; ?>   </td>
        <td scope="row"> <?php echo $student['the_programs']; ?>   </td>
        <td scope="row"> <?php echo $student['nationality']; ?>   </td>
        <td scope="row"> <?php echo $student['colleges']; ?>   </td>
        <td scope="row"> <?php echo $student['number_of_students']; ?>   </td>

    </tr>
        <?php
    }
  ?>
</tbody>
</table>
</div>
</body>
</html>