
<?php

$connection = mysqli_connect("localhost", "root", "", "MyPortfolio");

if(!$connection){
    die("FILED COONECTION".mysqli_error($connection));
       
}

?>