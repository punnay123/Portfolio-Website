<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    //INSERT INTO `portfolio` (`serial no.`, `name`, `email`, `contact`, `message`, `dt`) VALUES ('1', 'abcd', 'abc@gmail.com', '1234567890', 'good value', current_timestamp());
    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `portfolio`.`portfolio` (`name`, `email`, `contact`, `message`, `dt`) VALUES ('$name', '$email', '$contact', '$message', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>


