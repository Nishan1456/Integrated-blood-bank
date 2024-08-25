 


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sensor_db";

echo "we enter to the sensor db<br>";

$api_key_value = "tPmAT5Ab3j7F9";

$api_key= $temperature1 = $humidity1 = $temperature2 = $humidity2 = $weight1 = $weight2= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = test_input($_POST["api_key"]);
    if($api_key == $api_key_value) {
        $temperature1 = test_input($_POST["temperature1"]);
        $humidity1 = test_input($_POST["humidity1"]);
        $temperature2 = test_input($_POST["temperature2"]);
        $humidity2 = test_input($_POST["humidity2"]);
        $weight1 = test_input($_POST["weight1"]);
        $weight2 = test_input($_POST["weight2"]);
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "INSERT INTO dht11(temperature1,humidity1,temperature2,humidity2,weight1,weight2)
        VALUES ('" . $temperature1 . "', '" . $humidity1 . "', '" . $temperature2 . "', '" . $humidity2 . "', '" . $weight1 . "', '" . $weight2 . "')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    else {
        echo "Wrong API Key provided.";
    }

}
else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}