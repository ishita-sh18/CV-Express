<?php

require_once('fetchdb.php');
$query = "select * from qform";
$result = mysqli_query($con, $query)

?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <title> Fetch data from db </title>
    </head>
    <body class = "bg-dark">
        <div class = "container">
            <div class = "row mt-5">
                <div class = "col">
                    <div class = "card mt-5">
                        <div class = "card-header">
                            <h2 class = "display-6 text-center"> Fetch data from db </h2>
                        </div>
                        <div class = "card-body">
                            <table class = "table table-bordered text-center">
                                <tr class = "bg-dark text-white">
                                    <td> name </td>
                                    <td> contact </td>
                                    <td> email </td>
                                    <td> query </td>
                                </tr>
                                <tr class = "bg-dark text-white">
                                    <td> name </td>
                                    <td> contact </td>
                                    <td> email </td>
                                    <td> query </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </body>
</html>


