
<?php
//connecting to the database
$connection = mysqli_connect("localhost","root","","career_db") or die("unavble to connect");

if(!$connection){
    mysqli_error("Couldn't Connect to Database");
}
