<?php // declaring doctype
$link = mysqli_connect("localhost", "root", "root", "demo"); // declaring the database connection details (server:localhost, user:root, password:root, database:demo)
 
if($link === false){ // if credentials are not valid
    die("ERROR: Could not connect. " . mysqli_connect_error()); // display this error message
}

$sql = "INSERT INTO persons (first_name, last_name, email_address) VALUES ('Wormy', 'VonWormenstein', 'email@email.com')"; //insert the value "Wormy" to the "first_name" column, "VonWormenstein" to the "last_name" column, and "email@email.com" to the "email_address" columns in the "persons" table
if(mysqli_query($link, $sql)){ // if the data has been saved to a record
    echo "Records added successfully."; // display this confirmation message
} else{ // if the data has not been saved to a record
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); // display this error message
}
mysqli_close($link); // close the MySQL connection
?>
