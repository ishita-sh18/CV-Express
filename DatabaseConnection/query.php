<?php
    // getting all values from the HTML form
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $query = $_POST['query'];
    }
    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "query";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con) {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO qform (name, mobile, email, query) VALUES ('$name', '$mobile', '$email', '$query')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "We will resolve your issue soon :)";
    }
  
    // close connection
    mysqli_close($con);

?>