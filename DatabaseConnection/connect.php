<?php
    // getting all values from the HTML form
    if(isset($_POST['GenerateResume'])) {
        $firstname = $_POST['firstname'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $about = $_POST['about'];
        $skill = $_POST['skill'];
        $project = $_POST['project'];
        $work = $_POST['work'];
        $certificates = $_POST['certificates'];
        $qualification = $_POST['qualification'];
    }
    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con) {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO newform (firstname, mobile, email, address, about, skill, project, work, certificates, qualification) VALUES ('$firstname', '$mobile', '$email', '$address', '$about', '$skill', '$project', '$work', '$certificates', '$qualification')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>